<?php
$servername = 'localhost';
$usernamer = 'root';
$password = '123456';
$database = 'qlnv';

$conn = new mysqli($servername,$usernamer,$password,$database);
if (!$conn) {
    die("Connect to mysql failed:" .mysqli_connect_error());
}

$sql = " SELECT * FROM nhanvien  ";
$query = $conn->query($sql);

$result = array();
if ( mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
        $result[] = array(
            'manv'=> $row['manv'],
            'hoten'=>$row['hoten'],
            'namsinh'=> $row['ngaysinh'],
            'diachi'=>$row['diachi'],
            'email'=> $row['email'],
            'phone'=>$row['phone'],
            'luongcb'=> $row['luongcb'],
            'phucap'=>$row['phucap'],
            'tongluong'=>$row['tongluong'],
            'image_name'=>$row['image']
        );
      
    }
}
// var_dump($result);
echo( json_encode($result));
