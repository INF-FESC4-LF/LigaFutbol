<html>
<body>

<?php
define('DB_SERVER','localhost');
define('DB_NAME','practica7');
define('DB_USER','practica7');
define('DB_PASS','Practica7');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?>

</body>
</html>
