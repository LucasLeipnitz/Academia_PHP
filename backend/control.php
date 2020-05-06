<?php
require "DBConnection.php";
require "client.php";
use DBConnection\Connection;
use client\Client;

function selector(){
	switch ($_POST["op"]) {
		case 'insert':
			inserter($_POST["name"],$_POST["age"],$_POST["weigth"],$_POST["height"],$_POST["plan"]);
			break;
		
		case 'delete':
			deleter($_POST["name"]);
			break;
		default:
			# code...
			break;
	}
}

function inserter($name, $age, $weigth, $height, $plan){
	$con = new Connection();
	$con->insert($name,(int)$age,(float)$weigth, (float)$height, $plan);
}

function deleter($name){
	$con = new Connection();
	$con->delete($name);
}

selector();

?>