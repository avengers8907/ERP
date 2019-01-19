<?php

require_once("conexion.php");
class Presencia  extends Conexion{

public function alta(){

$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$hentrada=$_POST["hentrada"];
$hsalida=$_POST["hsalida"];
$this->sentencia = "Insert into presencia values(null,'$empleado','$fecha','$hentrada','$hsalida');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}