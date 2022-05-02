<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','library');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// PDO::MYSQL_ATTR_INIT_COMMAND (string)
// Command to execute when connecting to the MySQL server. Will automatically be re-executed when reconnecting.


//Database Object creation using PDO
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>