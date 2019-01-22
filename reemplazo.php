<?php

require_once("conexion.php");
class Reemplazo  extends Conexion{

public function alta(){

$recurso=$_POST["recurso"];
$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$falla=$_POST["falla"];
$this->sentencia = "INSERT INTO reemplazo values(null,'$recurso','$empleado','$fecha','$falla');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM reemplazo WHERE id_reemplazo=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM reemplazo";
return $this->obtener_sentencia();
}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$recurso=$_POST["recurso"];
$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$falla=$_POST["falla"];
$this->sentencia = "UPDATE reemplazo SET recurso='$recurso',empleado='$empleado',fecha='$fecha',falla='$falla' where id_reemplazo=$idModificar";
$this->ejecutar_sentencia();

}

}
