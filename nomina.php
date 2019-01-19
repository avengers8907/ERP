<?php

require_once("conexion.php");
class Nomina  extends Conexion{

public function alta(){

$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$monto=$_POST["monto"];
$this->sentencia = "Insert into nomina values(null,'$empleado','$fecha','$monto');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}