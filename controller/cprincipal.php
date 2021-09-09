<?php

class CPrincipalController
{
	
	public function ctrPrincipal()
	{
		include 'view/plantilla.php';
	}


	public function ctrRegistrarse()
	{
		$guardar = "";
		
		if (isset($_POST['txtCedula'])) {
				
			
			$nombre = $_POST['txtNombre'];
			$cedula = $_POST['txtCedula'];
			$distribuidor = $_POST['txtDistribuidor'];
			$sede = $_POST['txtSede'];
			$correo = $_POST['txtCorreo'];
			$celular = $_POST['txtCelular'];
			$ciudad = $_POST['txtCiudad'];
			$pass = $_POST['txtPass'];
			$codigo = $_POST['txtCodigo'];

			$usuario = $codigo.$cedula;

			$arrayData = array('usuario' => $usuario, 
								'nombre' => $nombre,
								'cedula' => $cedula,
								'distribuidor' => $distribuidor,
								'sede' => $sede,
								'ciudad' => $ciudad,
								'telefono' => $celular,
								'correo' => $correo,
								'codigo' => $codigo,
								'passw' => $pass);			
			

			if ($cedula != "") {
				$resultado = CrudUsuarios::mdlGuardar($arrayData);

				if($resultado["success"] == "ok")
				{
					echo '<script>
						alert("'.$resultado["mensaje"].'")
					</script>';
				}else{
					echo '<script>
						alert("'.$resultado["mensaje"].'")
					</script>';
				}

			}
			

		}		
	}

	public function ctrLogin()
	{
		if (isset($_POST['txtUsuarioLogin']) || isset($_POST['txtPassLogin'])) {
			$usuario = $_POST['txtUsuarioLogin'];
			$pass = $_POST['txtPassLogin'];			

			if ($usuario != "" && $pass != "") {

				$dataUsuario = CrudUsuarios::mdlObtenerUsuario($usuario, $pass);

				if ($dataUsuario) {
					$_SESSION["userData"] = $dataUsuario;
					$_SESSION["nombre"] = $dataUsuario;["nombre"];
				}
				
			}
		}
	}
}