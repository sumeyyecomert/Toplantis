<?php
include("baglan.php");
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giriş / Kayıt Ekranı</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php
    if (isset($_SESSION['login_error'])) {
      echo $_SESSION['login_error'];
      unset($_SESSION['login_error']);
    } 
    ?>
    <div class="container right-panel-active">
      <div class="container__form container--signup">
        <form action="register.php" class="form" id="form1" method="POST">
          <h2 class="form__title">Kayıt Ol</h2>
          <input
            type="text"
            placeholder="Kullanıcı"
            class="input"
            name="kullaniciadi"
          />
          <input
            type="email"
            placeholder="E-Posta"
            class="input"
            name="email"
          />
          <input
            type="password"
            placeholder="Şifre"
            class="input"
            name="parola"
          />
          <button class="btn" type="submit">Kayıt Ol</button>
        </form>
      </div>

      <div class="container__form container--signin">
        <form action="login.php" class="form" id="form2" method="POST">
          <h2 class="form__title">Giriş Yap</h2>
          <input name="email" type="email" placeholder="E-Posta" class="input" />
          <input  name="password" type="password" placeholder="Şifre" class="input" />
          <button class="btn" type="submit">Giriş Yap</button>
        </form>
      </div>

      <div class="container__overlay">
        <div class="overlay">
          <div class="overlay__panel overlay--left">
            <button class="btn" id="signIn">Giriş Yap</button>
          </div>
          <div class="overlay__panel overlay--right">
            <button class="btn" id="signUp" name="kaydol" value='kaydol'>Kayıt Ol</button>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script>
    const signInBtn = document.getElementById("signIn");
    const signUpBtn = document.getElementById("signUp");
    const fistForm = document.getElementById("form1");
    const secondForm = document.getElementById("form2");
    const container = document.querySelector(".container");

    signInBtn.addEventListener("click", () => {
      container.classList.remove("right-panel-active");
    });

    signUpBtn.addEventListener("click", () => {
      container.classList.add("right-panel-active");
    });

    //fistForm.addEventListener("submit", (e) => e.preventDefault());
    //secondForm.addEventListener("submit", (e) => e.preventDefault());

   
  </script>
</html>
