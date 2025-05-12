<?php

$dogru_email="b241210097@sakarya.edu.tr";
$dogru_sifre="b241210097";

$email=$_POST['email'];
$sifre=$_POST['sifre'];


if($dogru_email==$email && $dogru_sifre==$sifre){
    header("Refresh:3;url=anasayfa.html");
    echo "Hoşgeldin b241210097! Ana sayfaya yönlendiriliyorsun.";
    exit();
}
else{
    header("Refresh:3;url=giris.html");
    echo "Girdiğiniz email veya şifre hatalı!";
}

?>


