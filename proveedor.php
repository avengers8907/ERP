<?php

require_once("conexion.php");
class Proveedor extends Conexion{

public function alta(){

$nombre=$_POST["nombre"];
$razon=$_POST["razon"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$this->sentencia = "INSERT INTO proveedor values(null,'$nombre','$razon','$correo','$direccion','$telefono');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM proveedor WHERE id_proovedor=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
	$this->sentencia = "SELECT * FROM proveedor";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$nombre=$_POST["nombre"];
$razon=$_POST["razon"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$this->sentencia = "UPDATE proveedor SET nombre='$nombre',razon='$razon',correo='$correo',direccion='$direccion',telefono='$telefono' where id_proovedor=$idModificar";
$this->ejecutar_sentencia();


}

}
