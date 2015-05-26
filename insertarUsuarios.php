<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="estilos/pro1.css">
		<link rel="stylesheet" type="text/css" href="estilos/Barra.css">
	</head>
<body>

<?php

include("conexionGeneral.php");

if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
	isset($_POST['pw']) && !empty($_POST['pw']))
{

$con=mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problemas al conectar la BD");

mysql_query("INSERT INTO usuarios (usuario,password) VALUES ('$_POST[nombre]','$_POST[pw]')",$con);
echo "datos insertados";
}
else{
	echo "Problemas al insertar los datos";
}

?>

<br/><br/><br/>
<center><h5><IMG SRC="imagenes/ActExitosa.gif"></h5></center>

<br/><br/><br/>
<center><h1>Regresar</h1><a href="formUsuarios.php"><IMG SRC="imagenes/flecha.gif"></a><center>

</body>
</html>