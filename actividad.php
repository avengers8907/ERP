<?php

require_once("conexion.php");
class Actividad  extends Conexion{

public function alta(){

$usuario=$_POST["usuario"];
$fecha=$_POST["fecha"];
$movimiento=$_POST["movimiento"];
$this->sentencia = "Insert into actividad values(null,'$usuario','$fecha','$movimiento');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}