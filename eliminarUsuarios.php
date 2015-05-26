<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="estilos/pro1.css">
		<link rel="stylesheet" type="text/css" href="estilos/Barra.css">
	</head>
<body>

<?php

include("conexionGeneral.php");

$con=mysql_connect($host,$user,$pw) or die ("Problemas en Servidor");
mysql_select_db($db,$con) or die ("Problemas en la BD");

$reg=mysql_query("SELECT idusuario FROM usuarios WHERE usuario = '$_POST[nombre]'",$con);

if($re=mysql_fetch_array($reg))
{
	mysql_query("DELETE FROM usuarios WHERE usuario = '$_POST[nombre]'",$con);
	echo "Datos eliminados";
}
else{
	echo "Datos no han sido eliminados";
}

?>

<br/><br/><br/>
<center><h5><IMG SRC="imagenes/ActExitosa.gif"></h5></center>

<br/><br/><br/>
<center><h1>Regresar</h1><a href="formEliminar.php"><IMG SRC="imagenes/flecha.gif"></a><center>

</body>
</html>