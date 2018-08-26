<?php
$servername = 'localhost';
$usernamer = 'root';
$password = '123456';
$database = 'student';

$conn = new mysqli($servername,$usernamer,$password,$database);
if (!$conn) {
    die("Connect to mysql failed:" .mysqli_connect_error());
}