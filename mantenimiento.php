<?php

require_once("conexion.php");
class Mantenimiento  extends Conexion{

public function alta(){

$recurso=$_POST["recurso"];
$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$razon=$_POST["razon"];
$this->sentencia = "INSERT INTO mantenimiento values(null,'$recurso','$empleado','$fecha','$razon');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM mantenimiento WHERE id_mantenimiento=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM mantenimiento";
return $this->obtener_sentencia();
}

public function modifica(){
$idModificar = $_POST["idModificar"];
$recurso=$_POST["recurso"];
$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$razon=$_POST["razon"];
$this->sentencia = "UPDATE mantenimiento SET recurso='$recurso',empleado='$empleado',fecha='$fecha',razon='$razon' where id_mantenimiento=$idModificar";
$this->ejecutar_sentencia();
}

}