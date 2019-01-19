<?php

require_once("conexion.php");
class Cliente  extends Conexion{

public function alta(){

$nombre=$_POST["nombre"];
$razon=$_POST["razon"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$this->sentencia = "Insert into cliente values(null,'$nombre','$razon','$correo','$direccion','$telefono');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}