<?php
$servername="localhost";
$username="root";
$password="Daann@2001";
$dbname="music_academy";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Connection Failed: ".$conn->connect_error);
}
?>