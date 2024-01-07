<?php 
include("baglan.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

session_start();

    $email= $_POST["email"];
    $password= $_POST["password"];
  
    $cagir = "SELECT * FROM giris WHERE email='$email' AND parola='$password'";
    $calistirekle = mysqli_query($baglan,$cagir);
    
    mysqli_close($baglan);

    $kullanici = mysqli_fetch_assoc($calistirekle);

    if ($kullanici) {
        $_SESSION['kullaniciadi'] = $kullanici['kullanici_adi'];
        $_SESSION['email'] = $kullanici['email'];

        header("Location: ../index.php");
    } else {
        $_SESSION['login_error'] = 'Kullanıcı bulunamadı.';
        header("Location: index.php");
    }
}
?> 