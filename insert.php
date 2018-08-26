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
$image_name = $_GET['image_name'];

echo $image_name;
$sql_manv = "select manv from nhanvien where manv = '$manv'";

$result = $conn->query($sql_manv);
$result_manv = mysqli_num_rows($result);
$sql = "Insert into nhanvien (manv,hoten , ngaysinh, diachi, phone, email, luongcb , phucap, tongluong, image) values ('$manv','$hoten' , '$namsinh', '$diachi', '$phone', '$email', '$luongcb' , '$phucap','$tongluong', '$image_name')";
echo $sql;
if ($result_manv) {
    $mess = array(
        "Ma NV da ton tai  ".$conn->error
    );
} elseif ($conn -> query($sql) == true) {
    $mess = array(
        "Thêm mới thành công!"
    );
} else {
    $mess = array(
        "Thêm mới thất bại  ".$conn->error
    );
}
echo(json_encode($mess));