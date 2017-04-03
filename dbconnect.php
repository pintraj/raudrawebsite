<?php
/**
 * Created by PhpStorm.
 * User: JackSparrow
 * Date: 13/02/2017
 * Time: 14:50
 */
?>
<?php
$username = "email";
$password = "email";
$hostname = "localhost";
$database = "email";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password, $database)
or die("Unable to connect to MySQL");
?>

