<?php
/*
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_prog = "localhost";
$database_prog = "ae53sfrs_new_app";
$username_prog = "ae53sfrs_appuser";
$password_prog = "F1dZh}Ug}z7L";
$prog = mysqli_connect($hostname_prog, $username_prog, $password_prog,$database_prog) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET NAMES 'utf8'");
*/
$database_prog = "ae53sfrs_new_app";
$prog = mysqli_connect("localhost","prwg_prwgusr","Yx(WGQ+]t.@e","prwg_prdb");
$prog->set_charset("utf8");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>