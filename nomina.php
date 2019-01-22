<?php

require_once("conexion.php");
class Nomina  extends Conexion{

public function alta(){

$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$monto=$_POST["monto"];
$this->sentencia = "INSERT INTO nomina values(null,'$empleado','$fecha','$monto');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM nomina WHERE id_nomina=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM nomina";
return $this->obtener_sentencia();
}

public function modifica(){
$idModificar = $_POST["idModificar"];
$empleado=$_POST["empleado"];
$fecha=$_POST["fecha"];
$monto=$_POST["monto"];
$this->sentencia = "UPDATE nomina SET empleado='$empleado',fecha='$fecha',montO='$monto' where id_nomina=$idModificar";
$this->ejecutar_sentencia();
}

}