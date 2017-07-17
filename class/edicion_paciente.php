<?php
include("database.php");
$objData = new Database();

$id=$_POST['id'];
$nombre_paciente=$_POST['nombre_paciente'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$estado_civil=$_POST['estado_civil'];
$escolaridad=$_POST['escolaridad'];
$ocupacion=$_POST['ocupacion'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$motivo_consulta=$_POST['consulta'];
$fecha_alta=$_POST['fecha_alta'];


if ($nombre_paciente == null || $edad == null || $fecha_nacimiento == null || $direccion == null || $telefono == null || $email == null ) {
echo '
	<script>
	
		swal({
			  title: "Cuidado!",
			   text: "Campo(s) Vacio(s).",
			  type: "warning"
		});
	</script>
	';
}else{

	$sth = $objData->prepare('UPDATE datos_personales SET nombre_paciente = "'.$nombre_paciente.'" , edad = "'.$edad.'",sexo = "'.$sexo.'" , fecha_nacimiento = "'.$fecha_nacimiento.'",estado_civil = "'.$estado_civil.'" , escolaridad = "'.$escolaridad.'",ocupacion = "'.$ocupacion.'" , direccion = "'.$direccion.'",telefono = "'.$telefono.'" ,email = "'.$email.'",motivo_consulta = "'.$motivo_consulta.'",fecha_elaboracion = "'.$fecha_alta.'" WHERE id_paciente = "'.$id.'" ');

	$sth->execute();

	if($sth){

	echo '
	<script>
		swal({
			  title: "Felicidades!",
			  text: "Se ha dado de Alta el Paciente",
			  type: "success"
		});location.reload(100);
	</script>
	';
	
	}else{
		echo '
	<script>
		swal({
			  title: "Error!",
			  text: "Algo Salio Mal.",
			  type: "Error"


		});location.reload(900);
	</script>
	';
	}




}


