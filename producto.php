<?php

require_once("conexion.php");
class Producto  extends Conexion{

public function alta(){

$nombre=$_POST["nombre"];
$costo=$_POST["costo"];
$unidad=$_POST["unidad"];
$stock=$_POST["stock"];
$existencia=$_POST["existencia"];
$codigo=$_POST["codigo"];
$descripcion=$_POST["descripcion"];
$almacen=$_POST["almacen"];
$categoria=$_POST["categoria"];
$this->sentencia = "INSERT INTO producto values(null,'$nombre','$costo','$unidad','$stock','$existencia','$codigo','$descripcion','$almacen','$categoria');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM producto WHERE id_producto=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
	$this->sentencia = "SELECT * FROM producto";
return $this->obtener_sentencia();

}

public function modifica(){
$idModificar = $_POST["idModificar"];
$nombre=$_POST["nombre"];
$costo=$_POST["costo"];
$unidad=$_POST["unidad"];
$stock=$_POST["stock"];
$existencia=$_POST["existencia"];
$codigo=$_POST["codigo"];
$descripcion=$_POST["descripcion"];
$almacen=$_POST["almacen"];
$categoria=$_POST["categoria"];
$this->sentencia = "UPDATE producto SET nombre='$nombre',costo='$costo',unidad='$unidad',stock='$stock',existencia='$existencia',codigo='$codigo',descripcion='$descripcion',almacen='$almacen',categoria='$categoria' where id_producto=$idModificar";
$this->ejecutar_sentencia();
}

}