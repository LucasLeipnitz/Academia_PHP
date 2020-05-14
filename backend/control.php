<?php
require "DBConnection.php";
require "client.php";
use DBConnection\Connection;
use client\Client;

function operator(){
	switch ($_POST["op"]) {
		case 'insert':
			inserter($_POST["name"],$_POST["age"],$_POST["weigth"],$_POST["height"],$_POST["plan"]);
			break;
		case 'delete':
			deleter($_POST["name"]);
			break;
		case 'select':
			selector($_POST["name"]);
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

function selector($name){
	$con = new Connection();
	$result = $con->select($name);

	$client = new Client($result[0],$result[1],$result[2],$result[3],$result[4],$result[5]);

	print nl2br("ID: ".$client->getId()."\n");
	print nl2br("Nome: ".$client->getName()."\n");
	print nl2br("Idade: ".$client->getAge()."\n");
	print nl2br("Peso: ".$client->getWeigth()."\n");
	print nl2br("Altura: ".$client->getHeight()."\n");
	print nl2br("Plano: ".$client->getPlan()."\n");
	print nl2br("IMC: ".number_format($client->getBMI(),2)."\n");
}

operator();

?>