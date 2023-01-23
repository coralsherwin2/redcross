<?php  

$sname = "db4free.net";
$uname = "coralsherwin2";
$password = "112000117";

$db_name = "coralsherwin2";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}

