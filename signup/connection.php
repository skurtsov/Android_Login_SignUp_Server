<?php
$hostname='localhost';
$database='login';
$username='root';
$password='';

$connection=new mysqli($hostname,$username,$password,$database);
if($connection->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>