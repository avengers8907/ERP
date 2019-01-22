<?php

require_once("conexion.php");
class Empleado  extends Conexion{

public function alta(){

$nombre=$_POST["nombre"];
$apellidop=$_POST["apellidop"];
$apellidom=$_POST["apellidom"];
$area=$_POST["area"];
$puesto=$_POST["puesto"];
$salario=$_POST["salario"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$fecha=$_POST["fecha"];
$curp=$_POST["curp"];
$telefono=$_POST["telefono"];
$civil=$_POST["civil"];
$escolaridad=$_POST["escolaridad"];
$postal=$_POST["postal"];
$this->sentencia = "INSERT INTO empleado values(null,'$nombre','$apellidop','$apellidom','$area','$puesto','$salario','$correo','$direccion','$fecha','$curp','$telefono','$civil','$escolaridad','$postal');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM empleado WHERE id_empleado=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM empleado";
return $this->obtener_sentencia();
}

public function modifica(){
$idModificar = $_POST["idModificar"];
$nombre=$_POST["nombre"];
$apellidop=$_POST["apellidop"];
$apellidom=$_POST["apellidom"];
$area=$_POST["area"];
$puesto=$_POST["puesto"];
$salario=$_POST["salario"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$fecha=$_POST["fecha"];
$curp=$_POST["curp"];
$telefono=$_POST["telefono"];
$civil=$_POST["civil"];
$escolaridad=$_POST["escolaridad"];
$postal=$_POST["postal"];
$this->sentencia = "UPDATE empleado SET nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',area='$area',puesto='$puesto',salario='$salario',correo='$correo',direccion='$direccion',fecha='$fecha',curp='$curp',telefono='$telefono',civil='$civil',escolaridad='$escolaridad',postal='$postal' where id_empleado=$idModificar";
$this->ejecutar_sentencia();
}

}