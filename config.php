<?php
require('environment.php');

$config = array();

if(ENVIRONMENT == 'dev')
{
	define('BASE_URL', 'http://localhost/sodresantoro_crud/');
	$config['database'] = 'sodresantoro_crud';
	$config['datahost'] = 'localhost';
	$config['datauser'] = 'root';
	$config['datapass'] = '';
}

global $pdo;

try
{
	$pdo = new PDO("mysql:dbname=".$config['database'].";host=".$config['datahost'], $config['datauser'], $config['datapass']);
}
catch(PDOException $e)
{
	echo "ERRO: ".$e->getMessage();
}