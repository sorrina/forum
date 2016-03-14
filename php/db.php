<?php
require_once __DIR__.'/Medoo-master/medoo.php';

$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'forum',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8'
]);
?>
