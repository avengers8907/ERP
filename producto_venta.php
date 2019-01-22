<?php

require_once("conexion.php");
class Producto_venta  extends Conexion{

public function alta(){

$producto=$_POST["producto"];
$venta=$_POST["venta"];
$cantidad=$_POST["cantidad"];
$this->sentencia = "INSERT INTO producto_venta values(null,'$proveedor','$fecha','$total');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM producto_ventac WHERE id_producto_venta=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
	$this->sentencia = "SELECT * FROM producto_venta";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$producto=$_POST["producto"];
$venta=$_POST["venta"];
$cantidad=$_POST["cantidad"];
$this->sentencia = "UPDATE producto_venta SET proveedor='$proveedor',fecha='$fecha',total='$total' where id_producto_venta=$idModificar";
$this->ejecutar_sentencia();

}

}