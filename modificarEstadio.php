<html>
<head>
<title>Form</title>
<link rel="stylesheet" type="text/css" href="estilos/pro1.css">
</head>

<body>

<?php

include("conexionGeneral.php");

$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar.");

mysql_select_db($db,$con) or die("Problema con Base de Datos");

mysql_query("UPDATE Sede set NOMBRE='$_POST[nuevo]' WHERE NOMBRE='$_POST[viejo]'",$con)or die(mysql_error());

//echo "<center><h2>Actualizacion Correcta</h2></center>";

?>

<br/><br/><br/>
<center><IMG SRC="imagenes/actualizacion.gif"> </center>

<br/><br/><br/>
<center><h1>Regresar</h1><a href="formEstadios.php"><IMG SRC="imagenes/flecha.gif"></a><center>

</body>
</html>