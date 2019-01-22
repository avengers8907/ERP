<?php

require_once("conexion.php");
class Usuario  extends Conexion{

public function alta(){

$nombre=$_POST["nombre"];
$password=$_POST["password"];
$empleado=$_POST["empleado"];
$this->sentencia = "INSERT INTO usuario values(null,'$nombre','$password','$empleado');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM usuario WHERE id_usuario=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
	$this->sentencia = "SELECT * FROM usuario";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$nombre=$_POST["nombre"];
$password=$_POST["password"];
$empleado=$_POST["empleado"];
$this->sentencia = "UPDATE usuario SET nombre='$nombre',password='$password',empleado='$empleado' where id_usuario=$idModificar";
$this->ejecutar_sentencia();

}

}
