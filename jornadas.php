<html>

<head>
	<title>Jornadas</title>
	<link rel="stylesheet" type="text/css" href="estilos/pro1.css">
	<link rel="stylesheet" type="text/css" href="estilos/Barra.css">

<body>

<br/><br/><br/>

<div class="escudos"><h5><center><IMG SRC="imagenes/Jornadas.gif" ></h5></center></div>

<!--<br/><br/><center><h2>~ Consulta Jornadas ~</h2></center> --!>


<!-- Con Cilo !-->

!-->

<?php
// Conectando, seleccionando la base de datos

$cuenta = 1;

$link = mysql_connect('localhost', 'practica7', 'Practica7')
    or die('No se pudo conectar: ' . mysql_error());

//echo 'Connected successfully'; //Lo uso para saber si sí conectó a la B.D.

mysql_select_db('practica7') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL

//SELECT Partido.Num_Jornada, Eq_Local, Resultados.Marcador, Partido.Eq_Visitante, Hora, Fecha  FROM Partido, Resultados WHERE Partido.Num_Jornada=1 AND Partido.Id_Partido = Resultados.Id_Partido;

for ($cuenta >= 1; $cuenta <=17; $cuenta++) {

$query = "SELECT Partido.Num_Jornada, Eq_Local, Resultados.Marcador, Partido.Eq_Visitante, Hora, Fecha  FROM Partido, Resultados WHERE Partido.Num_Jornada=$cuenta AND Partido.Id_Partido = Resultados.Id_Partido";

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML

echo "<br/><br/><center><table border=1 width=900>
	<tr>
		<td width=100><h3>Jornada</h3></td>
		<td width=100><h3>Local</h3></td>
		<td width=100><h3>Marcador</h3></td>
		<td width=100><h3>Visitante</h3></td>
		<td width=100><h3>Hora</h3></td>
		<td width=100><h3>Fecha</h3></td>
	</tr>
</center></table>";

echo "<center><table border=1 width=900>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td width=100><h3>$col_value</h3></td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table></center>\n";

//$cuenta++;

}

// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>

<br/><br/><br/>
<center><h1>Regresar</h1><a href="index.php"><IMG SRC="imagenes/flecha.gif"></a><center>

</body>
</html>
