<?php
// Recuperación de datos y almacenamiento en variables.
$nombre = $_POST['nombre'];
$edad = $_POST['dni'];
$sexo = $_POST['sexo'];
$anio = $_POST['ANIO'];
$mes = $_POST['mes'];
$dia = $_POST['dia'];
$sistema = $_POST['sistema'];
$futbol = $_POST['boleta'];
$aficiones = $_POST['comentarios'];
$anioactual=2021-$anio;

echo "Saludos <b>". $nombre. "</b> su compra esta hecha<BR>\n";
echo "su sexo: ". $sexo. "<BR>\n";
if($anioactual<18 and $anioactual>3){
    echo "su pasaje será de menor de edad, precio -25%<BR>\n";
}

if($anioactual>=18){
    echo "su pasaje será de adulto, precio completo<BR>\n";
}
if ($anioactual<=2){
    echo "no paga pasaje<BR>\n";
}
echo "Su metodo de pago es ". $sistema. "<BR>\n";
if ($futbol)
{
 echo "Quiere boleta <BR>\n";
}
else
{
 echo "No solicito boleta <BR>\n";
}
if ($aficiones != "")
{
 echo "Tus comentarios son: <BR>\n";
 echo $aficiones;
}
else
{
 echo "NO tienes comentarios <BR>\n";
}
?>