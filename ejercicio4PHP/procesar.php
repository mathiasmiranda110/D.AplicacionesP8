<?php
copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
echo "Archivo SUBIDO EXITOSAMENTE";
$nombre=$_FILES['foto']['name'];
echo "<img src=\"$nombre\">";
?>