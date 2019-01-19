<?php

require_once("conexion.php");
class Cuestionario  extends Conexion{

public function alta(){

$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];
$p6=$_POST["p6"];
$p7=$_POST["p7"];
$p8=$_POST["p8"];
$p9=$_POST["p9"];
$p10=$_POST["p10"];
$this->sentencia = "Insert into cuestionario values(null,'$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10');";
$this->ejecutar_sentencia();

}

public function baja(){
	

}

public function consulta(){

}

public function modifica(){

}

}