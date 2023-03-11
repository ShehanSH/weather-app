<?php 

$conn = new mysqli('localhost','root','','form');
if(!$conn.mysqli_connect_error())
{
    echo "Connection Denied";
}


?>