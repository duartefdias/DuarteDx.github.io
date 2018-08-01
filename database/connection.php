<?php
$host = 'db.ist.utl.pt';
$user = 'ist181356'; //Your student number
$pass = 'vlgq1145'; //Your database password, login to your server with putty to generate one
$dsn = "mysql:host=$host;dbname=$user";

try
{
	$connection = new PDO($dsn, $user, $pass);
}
catch(PDOException $exception)
{
	echo("<p>Error: ");
	echo($exception->getMessage());
	echo("</p>");
	exit();
}

define('DB_HOST', 'db.ist.utl.pt');
define('DB_USER', 'ist181356');
define('DB_PASSWORD', 'vlgq1145');
define('DB_DATABASE', 'ist181356');


?>