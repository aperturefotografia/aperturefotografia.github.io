<?php

$databaseHost = 'localhost';//or localhost
$databaseName = 'aperture'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = 'password';  // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>
