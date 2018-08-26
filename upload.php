<?php
$servername = 'localhost';
$usernamer = 'root';
$password = '123456';
$database = 'qlnv';

$conn = new mysqli($servername,$usernamer,$password,$database);
if (!$conn) {
    die("Connect to mysql failed:" .mysqli_connect_error());
}

try {
    if( isset($_POST) && !empty($_FILES['file']) ) {
        $duoi = explode('.', $_FILES['file']['name']);
        $duoi = $duoi[count($duoi)-1];
        $name_file = $_FILES['file']['name'];
        
         
        if ( $duoi == 'jpg' || $duoi == 'png' || $duoi == 'git' ) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' .$_FILES['file']['name'])) {
                
                die($name_file);
                
            } else {
                die("no ok");
            }
        } else {
            die('Chi duoc upload anh upload.php');
        }
        
        
    } else {
        
    }
    
} catch (Exception $e) {
    var_dump($e);
}
