<?php
$mysql_host="localhost";
$username="root";
$password="akshat123";
$db="cv_builder";
mysql_connect($mysql_host,$username,$password);
mysql_select_db($db);
if(!mysql_connect($mysql_host,$username,$password))
{
die('Cannot connect to database. Try later.');
}

?>

