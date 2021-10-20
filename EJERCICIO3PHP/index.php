<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>
inscripcion
 </title>
"FORMULARIO DE INSCRIPCION DE USUARIOS"
</head>

<body>
 <FORM METHOD="post" ACTION="mis_datos.php">
 <input type="hidden" name="edad" value="30">
 <p>NOMBRE COMPLETO: <input type="text" name="nombre" size="30" value="paty"></p>
 <p>DIRECCION:  <input type="text" name="direccion" size="100" /></p>
 <p>CORREO ELECTRONICO:  <input type="text" name="correo" size="50" /></p>
 <p>CONTRASEÑA:  <input type="text" name="contrasena1" size="30" /></p>
 <p>CONFIRMAR CONTRASEÑA:  <input type="text" name="contrasena2" size="30" /></p>
<p>FECHA DE NACIMIENTO:
 AÑO: <input type="number" name="ANIO" size="4" 
 <p>MES: <input type="number" name="MES" size="2" 
 <p>DIA: <input type="number" name="DIA" size="2" /></p>

 <blockquote>
 <p>SEXO: 
  Hombre<input type="radio" value="hombre" checked name="sexo"
 <p>Mujer <input type="radio" name="sexo" value="mujer"></p>
 </blockquote></p>
<blockquote>
 <p>POR FAVOR ELIJA LOS TEMAS DE INTERES: 
  FICCION<input type="radio" value="FICCION" checked name="TEMAS"
 <p> TERROR <input type="radio" name="TEMAS" value="TERROR"
 <p> ACCION <input type="radio" name="TEMAS" value="ACCION"
 <p> COMEDIA <input type="radio" name="TEMAS" value="COMEDIA"
  <p>SUSPENSO <input type="radio" name="TEMAS" value="SUSPENSO"></p>
 </blockquote></p>

 <p>Seleccione aficiones
 <select size="1" name="sistema">
 <option selected value="estudio">estudio</option>
 <option value="trabajo">trabajo</option>
 <option value="musica">musica</option>
 <option value="videojuegos">videojuegos</option>
 </select></p>
 <p><input type="submit" value="Enviar datos" name="enviar">
 <input type="reset" value="Restablecer" name="B2"></p>
 </FORM>
</body>
</html>


