<?php 

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="softweb2";

$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);

if(!$baglan){
      die("Bağlantı işlemi başarısız".mysqli_connect_error());
}

?>