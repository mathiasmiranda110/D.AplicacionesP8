<?php

// Recuperación de datos y almacenamiento en variables.
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
$anio=$_POST['ANIO'];
$mes = $_POST['MES'];
$dia = $_POST['DIA'];
$contrasena = $_POST['contrasena'];
$temas = $_POST['temas'];
$aficiones = $_POST['comentarios'];


echo "Nombre: <b>". $nombre. "<BR>\n";
echo "Direccion: ". $direccion. "<BR>\n";
echo "Correo electrónico: ". $correo. "<BR>\n";
echo "Contrasena: ". $contrasena. "<BR>\n";
echo "Fecha de nacimiento: ".$dia."/".$mes."/".$anio. "<BR>\n";
echo "Sexo:  ". $sexo. "<BR>\n";
echo "Temas de interés: ". $temas. "<BR>\n";
echo "Aficiones: ". $aficiones. "<BR>\n";




?>