<?php
require "DBConnection.php";
use DBConnection\Connection;

function selector(){
	switch ($_POST["op"]) {
		case 'insert':
			inserter($_POST["name"]);
			break;
		
		default:
			# code...
			break;
	}
}

function inserter($name){
	$con = new Connection();
	$con->insert($name,23);
}

selector();

?>