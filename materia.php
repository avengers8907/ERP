<?php

require_once("conexion.php");
class Materia  extends Conexion{

public function alta(){

$nombre=$_POST["nombre"];
$unidad=$_POST["unidad"];
$existencia=$_POST["existencia"];
$costo=$_POST["costo"];
$proveedor=$_POST["proveedor"];
$this->sentencia = "INSERT INTO materia values(null,'$nombre','$unidad','$existencia','$costo','$proveedor');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM materia WHERE id_materia=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM materia";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
$nombre=$_POST["nombre"];
$unidad=$_POST["unidad"];
$existencia=$_POST["existencia"];
$costo=$_POST["costo"];
$proveedor=$_POST["proveedor"];
$this->sentencia = "UPDATE materia SET nombre='$nombre',unidad='$unidad',existencia='$existencia',costo='$costo',proveedor='$proveedor' WHERE id_materia=$idModificar";
$this->ejecutar_sentencia();
}

}


