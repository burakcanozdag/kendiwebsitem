<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $email = $_POST["email"];
    $no = $_POST["no"];
    $mesaj = $_POST["mesaj"];
    $cinsiyet = $_POST["cinsiyet"];

    echo "Ad: $isim<br>";
    echo "Soyad: $soyisim<br>";
    echo "Email: $email<br>";
    echo "Telefon: $no<br>";
    echo "Mesaj: $mesaj<br>";
    echo "Cinsiyet: $cinsiyet<br>";
} else {
    echo "Geçersiz istek!";
}
?>
