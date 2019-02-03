<?php

$database['db_host'] = "localhost";
$database['db_user'] = "root";
$database['db_pass'] = "";
$database['db_name'] = "forgetpass";


foreach ($database as $db => $value) {
	define(strtoupper($db), $value);
}


$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($dbcon) {

	return $dbcon;
	//echo "Connected.............! ! !";

}else{

	die("Connnection falied".mysql_error());
}