<?php

$email = $_POST["e"];
$password = $_POST["p"];

$dbms = new mysqli ("127.0.0.1","root","Avishka><123","students","3306");

$q = "INSERT INTO `student`(`email`,`password`) VALUES ('$email','$password') ";

$dbms->query($q);

echo ("Success");








?>