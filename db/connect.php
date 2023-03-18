<?php
$host="localhost";
$user= "root";
$password="";
$database="qlbh";

$con = mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_error()){
    echo "Connect fails: ".mysqli_connect_error();
}else

?>