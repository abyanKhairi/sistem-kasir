<?php

$host="localhost";
$user="root";
$pass= "";
$dbname= "kasir";

$conn = new mysqli($host,$user,$pass,$dbname);

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);






