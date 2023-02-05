<?php

$host = "localhost";
$username = "root";
$password = "";
$databaseName = "combatcorner";

$conn = mysqli_connect($host, $username, $password, $databaseName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}