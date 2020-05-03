<?php
require "DBConnection.php";
use DBConnection\Connection;

$con = new Connection();
echo $_POST["name"];
echo $_POST["op"];

?>