﻿<?php 
// DB credentials.
define('DB_HOST','istetkmce.in');
define('DB_USER','ezitmxze_recruit');
define('DB_PASS','Istetkmce@2020');
define('DB_NAME','ezitmxze_recruitment');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
