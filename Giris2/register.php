<?php 
include("baglan.php");
session_start();

    $name= $_POST["kullaniciadi"];
    $email= $_POST["email"];
    $password= $_POST["parola"];
  
    $ekle="INSERT INTO giris (kullanici_adi, email, parola) VALUES ('$name','$email','$password')";
    $calistirekle = mysqli_query($baglan,$ekle);
  
    mysqli_close($baglan);

    if($calistirekle){
        $_SESSION['kullaniciadi'] = $name;
        $_SESSION['email'] = $email;

        header("Location: ../index.php");
    }
   
?> 