<?php
include("database.php");
$objData = new Database();

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
$motivo_consulta=$_POST['motivo_consulta'];
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

	$sth = $objData->prepare("INSERT INTO datos_personales (nombre_paciente,edad,sexo,fecha_nacimiento,estado_civil,escolaridad,ocupacion,direccion,telefono,email,motivo_consulta,fecha_elaboracion) VALUES ('".$nombre_paciente."','".$edad."','".$sexo."','".$fecha_nacimiento."','".$estado_civil."','".$escolaridad."','".$ocupacion."','".$direccion."','".$telefono."','".$email."','".$motivo_consulta."','".$fecha_alta."')");

	$sth->execute();

	if($sth){

	echo '
	<script>
		swal({
			  title: "Felicidades!",
			  text: "Se ha dado de Alta el Paciente",
			  type: "success"
		});location.reload(1000);
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


