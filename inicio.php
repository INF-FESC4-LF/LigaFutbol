<!DOCTYPE html>
<html>

<head>
	<title>Liga Azteca</title>
	<link rel="stylesheet" type="text/css" href="estilos/pro1.css">
</head>

<body>

<!-- <center><IMG SRC="imagenes/banner.gif" width='1204' height='100'></center> !-->
	<br/>
	<h1><center>~ BIENVENIDOS A LIGA AZTECA ~</center></h1>

	
<div class="derecha"><IMG SRC="imagenes/ligaazteca.gif" ></div>

<div class="izquierda"><IMG SRC="imagenes/inicio.gif" width='480' height='320'></div>

<br/><br/><br/>
<br/><br/><div><center><IMG SRC="imagenes/tablagral.gif"></center></div>
<br/><br/><br/>

<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', '123')
    or die('No se pudo conectar: ' . mysql_error());

//echo 'Connected successfully'; //Lo uso para saber si sí conectó a la B.D.

mysql_select_db('Pruebas') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM clientes';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<center><table border=1 width=300>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td width=100><h3>$col_value</h3></td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table></center>\n";

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>


<br/><br/><br/>
<br/><br/><div><center><IMG SRC="imagenes/equipos.gif"></center></div>
<br/>

<br/>

<center>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/america.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/atlas.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/jaguares.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/chivas.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/gallos.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/xolos.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/azul.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/leon.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/leonesnegros.gif" width='80' height='80'></a></div>
</center>

<br/>

<center>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/monterrey.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/monarcas.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/pachuca.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/puebla.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/pumas.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/santos.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/tigres.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/toluca.gif" width='80' height='80'></a></div>
<div class="escudos"><a href="_.php"><IMG SRC="imagenes/veracruz.gif" width='80' height='80'></a></div>
</center>

<br/><br/><br/>
<br/><br/><div><center><a href="index.php"><IMG SRC="imagenes/acceso.gif" ></a></center></div>
<br/><br/><br/>



</body>
</html>
