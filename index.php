<?php 
session_start();
include("baglanti.php");
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giriş Sayfası | Softweb</title>

    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="owl/owl.theme.default.min.css" />
  </head>
  <body>
    <section id="menu">
      <div id="logo">Softweb</div>
      <nav>
        <a href="#anasayfa"> Anasayfa</a>
        <a href="#hakkimizda">Hakkımızda</a>
        <a href="#servislerimiz">Servislerimiz</a>
        <a href="#iletisim">İletişim</a>
        <?php if(!isset($_SESSION['kullaniciadi'])){ ?>
        <a href="Giris2/index.php"
          ><button type="button" class="btn btn-outline-light">
            Giriş Yap
          </button></a>
        <?php }else{ ?>
          <a href="#">Takvim</a>
          <a href="ToplantiOlustur/toplanti.html">
            <button type="button" class="btn btn-outline-light">
              Toplantı Oluştur
            </button>
          </a>
          <a href="/Toplantis/Giris2/logout.php">Çıkış Yap</a>
        <?php } ?>
      </nav>
    </section>

    <section id="anasayfa">
      <div id="black"></div>
    </section>

    <section id="hakkimizda">
      <h3>Hakkımızda</h3>
      <div class="container">
        <div id="sol">
          <h5 id="h5sol">
            Zamanın Kontrolü Sizde! Sitemizle Planlamayı Yeniden Keşfedin ve
            Toplantılarınızı Başarıyla Yönetin.
          </h5>
        </div>
        <div id="sag">
          <span>S</span>
          <p id="psag">
            SoftWeb olarak, iş süreçlerinizi düzenlemek, toplantıları etkili bir
            şekilde planlamak, etkinlikleri kusursuzca organize etmek ve oylama
            süreçlerini optimize etmek üzere uzmanlaştık. Sizin ihtiyaçlarınıza
            özel çözümler sunarak, profesyonel ve verimli bir iş yönetimi
            deneyimi yaşamanızı sağlıyoruz. Organizasyonunuzun her adımında
            başarıyı birlikte inşa etmek için ve sizinle birlikte büyümek için
            buradayız.
          </p>
        </div>
        <img src="img/about2.jpg" alt="" class="img-fluid mt100" />
      </div>
    </section>

    <section id="servislerimiz">
      <div class="container">
        <h3>Servislerimiz</h3>
        <div class="owl-carousel owl-theme">
          <div class="card item" data-merge="1.5">
            <img src="img/servist.jpg" alt="" class="img-fluid" />
            <h3 class="baslikcard">Profesyonel Toplantı Planlama</h3>
            <p class="cardp">
              Takviminizi düzenlemek ve etkin bir şekilde planlamak için özel
              olarak tasarlanmış çözümler sunuyoruz.
            </p>
          </div>
          <div class="card item" data-merge="1.5">
            <img src="img/reminder2.jpg" alt="" class="img-fluid" />
            <h3 class="baslikcard">Bildirimler ve Hatırlatıcılar</h3>
            <p class="cardp">
              Hatırlatıcılar göndererek süreçlerinizi düzenli tutmanıza yardımcı
              oluyoruz.
            </p>
          </div>
          <div class="card item" data-merge="1.5">
            <img src="img/servis3.jpg" alt="" class="img-fluid" />
            <h3 class="baslikcard">Toplantı Yönetimi</h3>
            <p>
              Profesyonel ve özelleştirilmiş toplantı planlama hizmetleri ile iş
              süreçlerinizi etkin bir şekilde yönetin.
            </p>
          </div>
          <div class="card item" data-merge="1.5">
            <img src="img/oylama.jpg" alt="" class="img-fluid" />
            <h3 class="baslikcard">Oylama Sistemi</h3>
            <p>
              Özel anket ve oylama olanağı tanıyarak önemli verileri etkili bir
              şekilde değerlendirmenize olanak tanıyoruz.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="iletisim">
      <div class="container">
        <h3 id="h3iletisim">İletişim</h3>
        <?php
          if(isset($_POST["isim"],$_POST["tel"],$_POST["mail"],$_POST["konu"],$_POST["mesaj"]))
          {
            $adsoyad=$_POST["isim"];
            $telefon=$_POST["tel"];
            $email=$_POST["mail"];
            $konu=$_POST["konu"];
            $mesaj=$_POST["mesaj"];

            $ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','". $email."','".$konu."','".$mesaj."')";

            if($baglan->query($ekle)===TRUE){ 
              echo '<div style="color:green;font-size:20px !important"><b>Mesajınız Gönderildi</b></div>';
            }
            
          } 
        ?>
        <form action="index.php" method="post">
        <div id="iletisimopak">
          <div id="formgroup">
            <div id="solform">
              <input
                type="text"
                name="isim"
                placeholder="Ad Soyad"
                required
                class="form-control"
              />
              <input
                type="text"
                name="tel"
                placeholder="Telefon Numarası"
                required
                class="form-control"
              />
            </div>
            <div id="sagform">
              <input
                type="email"
                name="mail"
                placeholder="Email adresiniz"
                required
                class="form-control"
              />
              <input
                type="text"
                name="konu"
                placeholder="Konu Başlığı"
                required
                class="form-control"
              />
            </div>
            <textarea
              name="mesaj"
              id=""
              cols="30"
              placeholder="Mesajınızı Girininiz"
              rows="10"
              required
              class="form-control"
            ></textarea>

            <input type="submit" value="Gönder" />
          </div>
          <div id="adres">
            <h4>Adres :</h4>
            <p>Natoyolu Cad.</p>
            <p>NO:265</p>
            <p>Ümraniye</p>
            <p>0212 777 77 77</p>
            <p>softweb@gmail.com</p>
          </div>
        </div>
        </form>
        <footer>
          <div id="copyright">2024|Tüm Hakları Saklıdır</div>
          <div id="socialfooter">
            <a href="#"><i class="fabfa-facebook-f social"></i></a>
            <a href="#"><i class="fabfa-google-plus-g social"></i></a>
            <a href="#"><i class="fabfa-twitter social"></i></a>
          </div>

          <a href="#menu" id="up"><i class="fa-solid fa-angles-up"></i></a>
        </footer>
      </div>
    </section>

    <script
      src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
      integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
      crossorigin="anonymous"
    ></script>
    <script src="owl/owl.carousel.min.js"></script>

    <script src="owl/script.js"></script>

    <script
      src="https://kit.fontawesome.com/ae2db4ee9d.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>