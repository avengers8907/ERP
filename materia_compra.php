<?php

require_once("conexion.php");
class Materia_compra  extends Conexion{

public function alta(){

$materia=$_POST["materia"];
$compra=$_POST["compra"];
$cantidad=$_POST["cantidad"];
$this->sentencia = "Insert into materia_compra values(null,'$materia','$compra','$cantidad');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}