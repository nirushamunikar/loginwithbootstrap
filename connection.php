<?php
$server='localhost';
$username='root';
$password='';
$table='table';
$con=mysqli_connect($server,$username,$password,$table);
if(!$con){
    echo "database not connected";
    die();
}







?>