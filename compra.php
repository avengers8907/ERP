<?php

require_once("conexion.php");
class Compra  extends Conexion{

public function alta(){

$proveedor=$_POST["proveedor"];
$fecha=$_POST["fecha"];
$total=$_POST["total"];
$this->sentencia = "Insert into compra values(null,'$proveedor','$fecha','$total');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}