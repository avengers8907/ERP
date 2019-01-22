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
$this->sentencia = "INSERT INTO cuestionario values(null,'$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10');";
$this->ejecutar_sentencia();

}

public function baja(){
	$idEliminar = $_POST["idEliminar"];
	$this->sentencia= "DELETE FROM cuestionario WHERE id_cuestionario=$idEliminar";
	$this->ejecutar_sentencia();

}

public function consulta(){
$this->sentencia = "SELECT * FROM cuestionario";
return $this->obtener_sentencia();
}

public function modifica(){
$idModificar = $_POST["idModificar"];
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
$this->sentencia = "UPDATE cuestionario SET p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5',p6='$p6',p7='$p7',p8='$p8',p9='$p9',p10='$p10' where id_cuestionario=$idModificar";
$this->ejecutar_sentencia();
}

}