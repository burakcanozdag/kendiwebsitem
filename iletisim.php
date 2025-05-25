<?php
error_reporting(0); 
ini_set('display_errors', 0); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = htmlspecialchars($_POST["isim"]);
    $soyisim = htmlspecialchars($_POST["soyisim"]);
    $email = htmlspecialchars($_POST["email"]);
    $no = htmlspecialchars($_POST["no"]);
    $mesaj = htmlspecialchars($_POST["mesaj"]);
    $cinsiyet = htmlspecialchars($_POST["cinsiyet"]);

   
    $dosyaYolu = __DIR__ . "/iletisim.txt";
    if (!is_writable($dosyaYolu)) {
        die(json_encode(["status" => "error", "message" => "Dosya yazılamıyor!"]));
    }

   
    $veri = "İsim: $isim | Soyisim: $soyisim | Email: $email | Telefon: $no | Mesaj: $mesaj | Cinsiyet: $cinsiyet\n";
    file_put_contents($dosyaYolu, $veri, FILE_APPEND);

    
    header('Content-Type: application/json');
    echo json_encode(["status" => "success", "message" => "Form başarıyla kaydedildi!", "data" => $_POST]);
} else {
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Geçersiz istek!"]);
}
?>