$(document).ready(function(){



$(".alta_paciente").click(function(){
$("#paciente_alta").show();


a=$(".nombre_paciente").val();
b=$(".edad").val();
c=$(".sexo").val();
d=$("#fecha_nacimiento").val();
e=$(".estado_civil").val();
f=$(".escolaridad").val();
g=$(".ocupacion").val();
h=$(".direccion").val();
i=$(".telefono").val();
j=$(".email").val();
k=$(".consulta").val();
l=$("#fecha_alta").val();

$.ajax({
	url:"class/alta_paciente.php",
	cache:false,
	type:"POST",
	data:{
		
		nombre_paciente:a,
		edad:b,
		sexo:c,
		fecha_nacimiento:d,
		estado_civil:e,
		escolaridad:f,
		ocupacion:g,
		direccion:h,
		telefono:i,
		email:j,
		consulta:k,
		fecha_alta:l
		
		
	},
	error: function(result){
alert("error petición ajax");
},
	success:function(result){
$("#paciente_alta").html(result);
}});
});

$("#paciente_alta").click(function(){

$("#paciente_alta").hide();//oculta el div cuando se hace clic sobre el mismo

location.reload(1);
});
});