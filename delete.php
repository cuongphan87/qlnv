<?php
$servername = 'localhost';
$usernamer = 'root';
$password = '123456';
$database = 'qlnv';

$conn = new mysqli($servername,$usernamer,$password,$database);
if (!$conn) {
    die("Connect to mysql failed:" .mysqli_connect_error());
}
$manv = $_GET['manv'];
$sql = "DELETE FROM nhanvien WHERE manv='$manv'";

echo $sql;
if ($conn -> query($sql) == true) {
    $mess = array(
        "xoa thanh cong!"
    );
} else {
    $mess = array(
        "xoa that bai!"
    );
}

echo(json_encode($mess));