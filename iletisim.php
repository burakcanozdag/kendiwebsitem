<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = htmlspecialchars($_POST["isim"]);
    $soyisim = htmlspecialchars($_POST["soyisim"]);
    $email = htmlspecialchars($_POST["email"]);
    $no = htmlspecialchars($_POST["no"]);
    $mesaj = htmlspecialchars($_POST["mesaj"]);
    $cinsiyet = htmlspecialchars($_POST["cinsiyet"]);

    $response = [
        "status" => "success",
        "message" => "Form başarıyla alındı.",
        "data" => [
            "isim" => $isim,
            "soyisim" => $soyisim,
            "email" => $email,
            "telefon" => $no,
            "mesaj" => $mesaj,
            "cinsiyet" => $cinsiyet
        ]
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    $response = ["status" => "error", "message" => "Geçersiz istek!"];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

