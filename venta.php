<?php

require_once("conexion.php");
class Venta  extends Conexion{

public function alta(){

$cliente=$_POST["clente"];
$fecha=$_POST["fecha"];
$total=$_POST["total"];
$empleado=$_POST["empleado"];
$this->sentencia = "Insert into venta values(null,'$cliente','$fecha','$total','$empleado');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}
