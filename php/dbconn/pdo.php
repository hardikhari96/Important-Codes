<?php


define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','test');
// Establish database connection.
try
{
	$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
	exit("Error: " . $e->getMessage());
}

$fname="hari";
$lname="patel";

$sql = "INSERT INTO `user`(`fname`, `lname`) VALUES (:fname,:lname)";
$query = $dbh -> prepare($sql);
$query->bindParam(':fname',$fname);
$query->bindParam(':lname',$lname);
$query->execute();



?>