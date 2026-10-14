<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = htmlspecialchars(trim($_POST["isim"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mesaj = htmlspecialchars(trim($_POST["mesaj"]));

    // Mail gönderme kısmı kapalı, sadece mesajı ekranda gösteriyoruz
    echo "<h2>Mesajınız başarıyla alındı!</h2>";
    echo "<p><strong>İsim:</strong> $isim</p>";
    echo "<p><strong>E-posta:</strong> $email</p>";
    echo "<p><strong>Mesajınız:</strong><br>" . nl2br($mesaj) . "</p>";

} else {
    header("Location: index.html");
    exit();
}
?>
