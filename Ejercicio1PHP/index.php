<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>
 LATAM 
 </title>
</head>
BIENVENIDOS  A  LATAM  AIRLANES
<body>
 <FORM METHOD="post" ACTION="mis_datos.php">
 <input type="hidden" name="edad" value="30">
 <p>NOMBRE: <input type="text" name="nombre" size="30" value="paty"></p>
 <p>DNI: <input type="text" name="DNI" size="8" /></p>
 <p>FECHA DE NACIMIENTO: </p>
 <p>AÑO: <input type="number" name="ANIO" size="4" /></p>
 <p>MES: <input type="number" name="MES" size="2" /></p>
 <p>DIA: <input type="number" name="DIA" size="2" /></p>
 <p>METODO DE PAGO
 <select size="1" name="sistema">
 <option selected value="Credito">Credito</option>
 <option value="Debito">Debito</option>
 <option value="Efectivo">Efectivo</option>
 <option value="Paypal">Paypal</option>
 </select></p>
 <p>¿Desea Boleta?<input type="checkbox" name="boleta"
value="ON"></p>
 <p>¿Cual es tu sexo?</p>
 <blockquote>
 <p>Hombre<input type="radio" value="hombre" checked name="sexo"></p>
 <p>Mujer <input type="radio" name="sexo" value="mujer"></p>
 </blockquote>
 <p>Comentarios</p>
 <p><textarea rows="5" name="comentarios" cols="28"></textarea></p>
 <p><input type="submit" value="Enviar datos" name="enviar">
 <input type="reset" value="Restablecer" name="B2"></p>
 </FORM>
</body>
</html>/

