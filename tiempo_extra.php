<?php

require_once("conexion.php");
class Tiempo_extra  extends Conexion{

public function alta(){

$empleado=$_POST["empleado"];
$horas=$_POST["horas"];
$pago=$_POST["pago"];
$this->sentencia = "INSERT INTO tiempo_extra values(null,'$empleado','$horas','$pago');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM tiempo_extra WHERE id_tiempoextra=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
	$this->sentencia = "SELECT * FROM tiempo_extra";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$empleado=$_POST["empleado"];
$horas=$_POST["horas"];
$pago=$_POST["pago"];
$this->sentencia = "UPDATE tiempo_extra SET empleado='$empleado',horas='$horas',pago='$pago' where id_tiempoextra=$idModificar";
$this->ejecutar_sentencia();


}

}
