<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dogru_email="b241210097@gmail.com";
$dogru_sifre="b241210097";

$email=$_POST['email'];
$sifre=$_POST['sifre'];

if($email==$dogru_email && $sifre==$dogru_sifre){
    header("Refresh:3;url=anasayfa.html");
    exit();
}
else{
    header("Refresh:3;url=giris.html");
    echo "Şifre veya Email yanlış, Lütfen tekrar deneyiniz!";
}

?>
