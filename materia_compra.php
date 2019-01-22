<?php

require_once("conexion.php");
class Materia_compra  extends Conexion{

public function alta(){

$materia=$_POST["materia"];
$compra=$_POST["compra"];
$cantidad=$_POST["cantidad"];
$this->sentencia = "INSERT INTO materia_compra values(null,'$materia','$compra','$cantidad');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM materia_compra WHERE id_materiacompra=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM materia_compra";
return $this->obtener_sentencia();
}

public function modifica(){
$idModificar = $_POST["idModificar"];
$materia=$_POST["materia"];
$compra=$_POST["compra"];
$cantidad=$_POST["cantidad"];
$this->sentencia = "UPDATE materia_compra SET materia='$materia',compra='$compra',cantidad='$cantidad' where id_materiacompra=$idModificar";
$this->ejecutar_sentencia();
}

}