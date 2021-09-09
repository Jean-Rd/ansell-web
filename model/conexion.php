<?php

class Database{

	static public function Conectar(){

		$link = new PDO("mysql:host=localhost;dbname=bd_puntos;port=3307",
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}

}