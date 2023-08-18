<?php
$mysql_hostname = "localhost:3306";
$mysql_user = "root";
$mysql_password = "Rmdec@2018";
$mysql_database = "rmddb";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
?>