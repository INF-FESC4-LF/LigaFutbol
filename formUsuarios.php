<html>
<head>
<title>Agregar Usarios</title>
<link rel="stylesheet" type="text/css" href="estilos/pro1.css">
<link rel="stylesheet" type="text/css" href="estilos/Barra.css">
</head>

<body>

<script>

alert ("Bienvenido");

</script>

<center><h1>Usuarios</h1></center>

<center><table border=1 width=250>
	<tr>
		<td width=100><h3>ID</h3></td>
		<td width=100><h3>Usuario</h3></td>
		<td width=100><h3>Password</h3></td>
	</tr>
</center></table>

<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'practica7', 'Practica7')
    or die('No se pudo conectar: ' . mysql_error());

//echo 'Connected successfully'; //Lo uso para saber si sí conectó a la B.D.

mysql_select_db('practica7') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL

$query = "SELECT * FROM usuarios";

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
<center><h5><IMG SRC="imagenes/Modificaciones.gif"></h5></center>


<br /><br />
<center>
	<form action="insertarUsuarios.php" method="post" name="form">
	<h3>Nombre del nuevo usuario</h3><input type="text" name="nombre" /><br />
	<h3>Password del nuevo usuario</h3><input type="text" name="pw" /><br /><br />
	<input type="submit" value="insertar datos" /><br />
	</form>
</center>

<br /><br /><h2>Cerrar Sesi&oacute;n</h2>
<a href="logout.php"><IMG SRC="imagenes/flecha.gif"></a>

</body>
</html>
