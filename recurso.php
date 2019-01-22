<?php

require_once("conexion.php");
class Recurso  extends Conexion{

public function alta(){

$nombre=$_POST["nombre"];
$marca=$_POST["marca"];
$descripcion=$_POST["descripcion"];
$existencia=$_POST["existencia"];
$costo=$_POST["costo"];
$empleado=$_POST["empleado"];
$area=$_POST["area"];
$this->sentencia = "INSERT INTO recurso values(null,'$nombre','$marca','$descripcion','$existencia','$costo','$empleado','$area');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM recurso WHERE id_recurso=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
	$this->sentencia = "SELECT * FROM recurso";
return $this->obtener_sentencia();

}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$nombre=$_POST["nombre"];
$marca=$_POST["marca"];
$descripcion=$_POST["descripcion"];
$existencia=$_POST["existencia"];
$costo=$_POST["costo"];
$empleado=$_POST["empleado"];
$area=$_POST["area"];
$this->sentencia = "UPDATE recurso SET nombre='$nombre',marca='$marca',descripcion='$descripcion',existencia='$existencia',costo='$costo',empleado='$empleado',area='$area' where id_recurso=$idModificar";
$this->ejecutar_sentencia();


}

}
