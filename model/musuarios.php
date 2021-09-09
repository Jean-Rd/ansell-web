<?php

include_once("conexion.php");

/**
 * MANTENIMIENTO USUARIOS
 */
class CrudUsuarios
{
	public function mdlObtenerUsuario($usuario, $pass)
	{
		$db=Database::Conectar();
		$query=$db->prepare("SELECT * FROM usuarios WHERE estado = 1 AND usuario = :usuario AND passw = :pass");

		$query->bindValue(":usuario", $usuario);
		$query->bindValue(":pass", $pass);

		$query->execute();
        $data=$query->fetch();

        return $data;
	}

	
	public function mdlListar()
	{
		$db=Database::Conectar();
		$query=$db->prepare("SELECT * FROM usuarios");
		
		$query->execute();
        $data=$query->fetchAll();

        return $data;
	}

	public function mdlGuardar($datos)
	{
		$db=Database::Conectar();

		$queryExiste=$db->prepare("SELECT COUNT(*) AS Cantidad FROM usuarios WHERE estado = 1 AND cedula = :cedula");
		$queryExiste->bindValue(":cedula", $datos["cedula"]);
		$queryExiste->execute();
        $dataExiste=$queryExiste->fetch();

        if ($dataExiste["Cantidad"] > 0) {
        	$arrayResultado = array('success' => 'error','mensaje' => "Ya existe ese usuario");
        }else{
        	$query=$db->prepare("INSERT INTO usuarios(usuario, nombre, cedula, distribuidor, sede, ciudad, telefono, correo, codigo, passw)
			VALUES(:usuario, :nombre, :cedula, :distribuidor, :sede, :ciudad, :telefono, :correo, :codigo, :passw)");

			$query->bindValue(":usuario", $datos["usuario"]);
			$query->bindValue(":nombre", $datos["nombre"]);
			$query->bindValue(":cedula", $datos["cedula"]);
			$query->bindValue(":distribuidor", $datos["distribuidor"]);
			$query->bindValue(":sede", $datos["sede"]);
			$query->bindValue(":ciudad", $datos["ciudad"]);
			$query->bindValue(":telefono", $datos["telefono"]);
			$query->bindValue(":correo", $datos["correo"]);
			$query->bindValue(":codigo", $datos["codigo"]);
			$query->bindValue(":passw", $datos["passw"]);	
			
			if ($query->execute()) {
				$arrayResultado = array('success' => 'ok','mensaje' => "Se guardo satisfactoriamente");
			}else{
				$arrayResultado = array('success' => 'error','mensaje' => "Hubo un error al tratar de guardar");
			}
        }

		

        return $arrayResultado;
	}

	public function mdlEditar($datos)
	{
		$db=Database::Conectar();
		$query=$db->prepare("UPDATE usuarios SET nombre = :nombre,
						identificacion = :identificacion,
						direccion = :direccion,
						telefono = :telefono,
						correo = :correo,
						usuariomodificacion = :usuario, 
						fechamodificacion = now() 
						WHERE id = :id");

		$query->bindValue(":id", $datos["id"]);
		$query->bindValue(":nombre", $datos["nombre"]);
		$query->bindValue(":identificacion", $datos["identificacion"]);
		$query->bindValue(":direccion", $datos["direccion"]);
		$query->bindValue(":telefono", $datos["telefono"]);
		$query->bindValue(":correo", $datos["correo"]);
		$query->bindValue(":usuario", $datos["usuario"]);		
		
		if ($query->execute()) {
			$arrayResultado = array('success' => 'ok','mensaje' => "Se edito satisfactoriamente");
		}else{
			$arrayResultado = array('success' => 'error','mensaje' => "Hubo un error al tratar de editar");
		}

        return $arrayResultado;
	}

	public function mdlEliminar($id,$usuario)
	{
		$db=Database::Conectar();
		$query=$db->prepare("UPDATE usuarios SET estado = 0, usuariomodificacion = :usuario, fechamodificacion = now() WHERE id = :id");

		$query->bindValue(":id", $id);
		$query->bindValue(":usuario", $usuario);		
		
		if ($query->execute()) {
			$arrayResultado = array('success' => 'ok','mensaje' => "Se elimino satisfactoriamente");
		}else{
			$arrayResultado = array('success' => 'error','mensaje' => "Hubo un error al tratar de eliminar");
		}

        return $arrayResultado;
	}
}