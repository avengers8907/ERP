<?php

require_once("conexion.php");
class Compra  extends Conexion{

public function alta(){

$proveedor=$_POST["proveedor"];
$fecha=$_POST["fecha"];
$total=$_POST["total"];
$this->sentencia = "INSERT INTO compra values(null,'$proveedor','$fecha','$total');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM compra WHERE id_compra=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM compra";
return $this->obtener_sentencia();
}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$proveedor=$_POST["proveedor"];
$fecha=$_POST["fecha"];
$total=$_POST["total"];
$this->sentencia = "UPDATE compra SET proveedor='$proveedor',fecha='$fecha',total='$total' where id_compra=$idModificar";
$this->ejecutar_sentencia();

}

}