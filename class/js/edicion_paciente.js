$(document).ready(function(){



$(".edicion_paciente").click(function(){
$("#paciente_edicion").show();


a=$(".nombre_paciente").val();
b=$(".edad").val();
c=$(".sexo").val();
d=$(".fecha_nacimiento").val();
e=$(".estado_civil").val();
f=$(".escolaridad").val();
g=$(".ocupacion").val();
h=$(".direccion").val();
i=$(".telefono").val();
j=$(".email").val();
k=$(".motivo_consulta").val();
l=$(".fecha_alta").val();
m=$(".id").val();

$.ajax({
	url:"class/edicion_paciente.php",
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
		fecha_alta:l,
		id:m
		
		
	},
	error: function(result){
alert("error petición ajax");
},
	success:function(result){
$("#paciente_edicion").html(result);
}});
});


});