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
$this->sentencia = "Insert into producto values(null,'$nombre','$costo','$unidad','$stock','$existencia','$codigo','$descripcion','$almacen','$categoria');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}