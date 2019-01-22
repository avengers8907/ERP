<?php
class Conexion{
private static $host= "localhost";
private static $user= "root";
private static $password= "";
private static $base= "crm";

private $sentencia;
private $conexion;

private function abrir_conexion(){

$this->conexion = new mysli(self::$host, self::$user, self::$password, self::$base);


}
private function cerrar_conexion(){
	$this->conexion->close();
	//conexion.close();

}

protected function ejecutar_sentencia(){
$this->abrir_conexion();
$this->conexion->query($this->sentencia);
$this->cerrar_conexion();

}
protected function obtener obtener_sentencia(){
	//consultar
	$this->abrir_conecion();
	$resultado= $this->conexion->query($this->sentencia);
	return $resultado;
}

  }








?>