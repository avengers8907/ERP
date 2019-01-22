<?php

require_once("conexion.php");
class Finanzas  extends Conexion{

public function alta(){

$inicio=$_POST["inicio"];
$fin=$_POST["fin"];
$total=$_POST["total"];
$this->sentencia = "INSERT INTO finanzas values(null,'$inicio','$fin','$total');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM finanzas WHERE id_finanzas=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM finanzas";
return $this->obtener_sentencia();
}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$inicio=$_POST["inicio"];
$fin=$_POST["fin"];
$total=$_POST["total"];
$this->sentencia = "UPDATE finanzas SET inicio='$inicio',fin='$fin',total='$total'  where id_finanzas=$idModificar";
$this->ejecutar_sentencia();


}

}