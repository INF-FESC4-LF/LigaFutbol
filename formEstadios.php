<html>
<head>
<title>Estadios Modificaciones</title>
<link rel="stylesheet" type="text/css" href="estilos/pro1.css">
</head>

<body>

<center><h1>Estadios</h1></center>

<center><table border=1 width=250>
	<tr>
		<td width=100><h3>ID</h3></td>
		<td width=100><h3>Nombre</h3></td>
		<td width=100><h3>Asistencia</h3></td>
	</tr>
</center></table>

<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', '123')
    or die('No se pudo conectar: ' . mysql_error());

//echo 'Connected successfully'; //Lo uso para saber si sí conectó a la B.D.

mysql_select_db('LIGA_FUTBOL') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL

$query = "SELECT * FROM Sede WHERE Id_Sede>0"; //ORDER BY Nom_Equipo='America'

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<center><table border=1 width=250>\n";
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

<br /><br />
<center><IMG SRC="imagenes/modificaciones.gif"> </center>


<br /><br />
<center>
	<form action="modificarEstadio.php" method="post">
	<h3>Nombre Antiguo del Estadio</h3><input type="text" name="viejo" /><br />
	<h3>Nuevo Nombre al Estadio</h3><input type="text" name="nuevo" /><br />
	<input type="submit" value="Actualizar" /><br />
	</form>
</center>

<br /><br /><h2>Cerrar Sesion</h2>
<a href="logout.php"><IMG SRC="imagenes/flecha.gif"></a>

</body>
</html>