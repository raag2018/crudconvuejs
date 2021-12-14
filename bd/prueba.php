<?php
require_once("conexion.php");
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$fecha = new Date();
switch($opcion){
	case 1:
		$consulta = "INSERT INTO prueba(nombre, correo, fecha) VALUES(?,?,?);";
		$result = $conexion->prepare($consulta);
		$result->execute($nombre, $correo, $fecha);
		break;
	case 2: 
		$consulta = "UPDATE prueba SET nombre = ?, correo = ? WHERE id = ?;";
		$result = $conexion->prepare($consulta);
		$result->execute($nombre, $correo, $id);
		break;
	case 3:
		$consulta = " DELETE FROM prueba WHERE id = ?;";
		$result = $conexion->prepare($consulta);
		$result->execute($id);
		break;
	case 4:
		$consulta = "SELECT id, nombre, correo FROM prueba;";
		$result = $conexion->prepare($consulta);
		$result->execute();
		$data = $result->fetchAll(PDO::FETCH_ASSOC);
		break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;
?>