<?php

require_once("conexion.php");
class Evaluacion  extends Conexion{

public function alta(){

$empleado=$_POST["empleado"];
$r1=$_POST["r1"];
$r2=$_POST["r2"];
$r3=$_POST["r3"];
$r4=$_POST["r4"];
$r5=$_POST["r5"];
$r6=$_POST["r6"];
$r7=$_POST["r7"];
$r8=$_POST["r8"];
$r9=$_POST["r9"];
$r10=$_POST["r10"];
$cuestionario=$_POST["cuestionario"];
$this->sentencia = "INSERT INTO evaluacion values(null,'$empleado',$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$cuestionario');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM evaluacion WHERE id_evaluacion=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM evaluacion";
return $this->obtener_sentencia();
}

public function modifica(){
	$idModificar = $_POST["idModificar"];
	$empleado=$_POST["empleado"];
$r1=$_POST["r1"];
$r2=$_POST["r2"];
$r3=$_POST["r3"];
$r4=$_POST["r4"];
$r5=$_POST["r5"];
$r6=$_POST["r6"];
$r7=$_POST["r7"];
$r8=$_POST["r8"];
$r9=$_POST["r9"];
$r10=$_POST["r10"];
$cuestionario=$_POST["cuestionario"];
$this->sentencia = "UPDATE evaluacion SET empleado='$empleado',r1='$r1',r2='$r2',r3='$r3',r4='$r4',r5='$r5',r6='$r6',r7='$r7',r8='$r8',r9='$r9',r10='$r10','$cuestionario' where id_evaluacion=$idModificar";

}

}