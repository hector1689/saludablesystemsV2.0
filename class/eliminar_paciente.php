<?php
include("database.php");
$objData = new Database();

$id=$_GET['id'];

$sth = $objData->prepare("DELETE FROM datos_personales WHERE id_paciente=$id");

$sth->execute();