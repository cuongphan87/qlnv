<?php
$servername = 'localhost';
$usernamer = 'root';
$password = '123456';
$database = 'qlnv';

$conn = new mysqli($servername,$usernamer,$password,$database);
if (!$conn) {
    die("Connect to mysql failed:" .mysqli_connect_error());
}

$sql = "";
$sql_manv = "";
$mess = array();
$manv = $_GET['manv'];
$hoten = $_GET['hoten'];
$namsinh = $_GET['namsinh'];
$diachi = $_GET['add'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$luongcb = $_GET['luongcb'];
$phucap = $_GET['phucap'];
$tongluong = $_GET['tongluong'];

$sql = "update nhanvien set hoten = '$hoten', ngaysinh = '$namsinh', diachi = '$diachi', phone = $phone, email = '$email', luongcb = $luongcb , phucap = $phucap, tongluong = '100'  where  manv = '$manv' ";

if ($conn -> query($sql) == true) {
    $mess = array(
        "Cap nhat thanh cong!"
    );
} else {
    $mess = array(
        "Cap nhat that bai!  ".$conn->error
    );
}
echo(json_encode($mess));