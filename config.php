<?php

	define('DBhost', 'localhost');
	define('DBuser', 'root');
	define('DBPass', '');
	define('DBname', 'ajax-submit');
	
	try{
		
		$DB_con = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
		
	}catch(PDOException $e){
		
		die($e->getMessage());
	}