<?php

require_once("conexion.php");
class Venta  extends Conexion{

public function alta(){

$cliente=$_POST["clente"];
$fecha=$_POST["fecha"];
$total=$_POST["total"];
$empleado=$_POST["empleado"];
$this->sentencia = "INSERT INTO venta values(null,'$cliente','$fecha','$total','$empleado');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM venta WHERE id_venta=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
	$this->sentencia = "SELECT * FROM venta";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$cliente=$_POST["clente"];
$fecha=$_POST["fecha"];
$total=$_POST["total"];
$empleado=$_POST["empleado"];
$this->sentencia = "UPDATE venta SET cliente='$cliente',fecha='$fecha',total='$total',empleado='$empleado' WHERE id_venta=$idModificar";
$this->ejecutar_sentencia();

}

}
