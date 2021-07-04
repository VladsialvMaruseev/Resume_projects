<?php 

function genRandomString($length = 8){
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charsLength = strlen($chars);
    $randomString = "";
    for ($i = 0; $i < $length; $i++){
        $randomString .= $chars[rand(0, $charsLength - 1)];
    }
    $randomString .= ".jpg";
    return $randomString;
}

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

$name = genRandomString(32);

move_uploaded_file($tmp_name, "../images/uploads/". $name);
echo 'Файл успешно загружен';

header( "Location: ../profile/add_photo.php");
?>
