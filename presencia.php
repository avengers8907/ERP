<?php

require_once("conexion.php");
class Presencia  extends Conexion{

public function alta(){

$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$hentrada=$_POST["hentrada"];
$hsalida=$_POST["hsalida"];
$this->sentencia = "INSERT INTO presencia values(null,'$empleado','$fecha','$hentrada','$hsalida');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM presencia WHERE id_presencia=$idEliminar";
	$this->ejecutar_sentencia();
}

public function consulta(){
	$this->sentencia = "SELECT * FROM presencia";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$hentrada=$_POST["hentrada"];
$hsalida=$_POST["hsalida"];
$this->sentencia = "UPDATE presencia SET empleado='$empleado',fecha='$fecha',hentrada='$hentrada',hsalida='$hsalida' where id_presencia=$idModificar";
$this->ejecutar_sentencia();



}

}