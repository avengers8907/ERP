<?php

require_once("conexion.php");
class Finanzas  extends Conexion{

public function alta(){

$inicio=$_POST["inicio"];
$fin=$_POST["fin"];
$total=$_POST["total"];
$this->sentencia = "Insert into finanzas values(null,'$inicio','$fin','$total');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}