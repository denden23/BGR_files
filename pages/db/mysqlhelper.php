<?php

	$host ='localhost';
	$uname='root';
	$pword='root';
	//$pword='';
	$dbase = 'db_bgr';
	
	try {

		$mysqlhelper = new PDO("mysql:host=$host;dbname=$dbase",$uname,$pword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$mysqlhelper->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}
	
?>