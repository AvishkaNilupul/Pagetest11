<?php

$email = $_POST["e"];
$password = $_POST["p"];

$conn = new mysqli("127.0.0.1","root","Avishka><123","students","3306");

$q = "SELECT * FROM `student` WHERE `email` = '".$email."' AND `password`='".$password."'";

$rs = $conn->query($q);

$n = $rs->num_rows;

if($n == 1){
    header("Location:studentpage.php");

}else{
    echo("error");
}




?>