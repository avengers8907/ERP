<?php

require_once("conexion.php");
class Actividad  extends Conexion{

public function alta(){

$usuario=$_POST["usuario"];
$fecha=$_POST["fecha"];
$movimiento=$_POST["movimiento"];
$this->sentencia = "INSERT INTO actividad values(null,'$usuario','$fecha','$movimiento');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM actividad WHERE id_actividad=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM actividad";
return $this->obtener_sentencia();
}

public function modifica(){
	idModificar =$_POST["idModificar"];
$usuario=$_POST["usuario"];
$fecha=$_POST["fecha"];
$movimiento=$_POST["movimiento"];
$this->sentencia = "UPDATE actividad SET usuarip='$usuario',fecha='$fecha',movimiento='$movimiento' WHERE id_actividad=$idModificar";
$this->ejecutar_sentencia();
}

}