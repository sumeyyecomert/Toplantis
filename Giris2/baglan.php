<?php   
   $host="localhost";
   $kullanici="root";   
   $parola="";       
   $vt="softweb2";         
   $baglan = mysqli_connect($host, $kullanici, $parola, $vt);     
   mysqli_set_charset($baglan, "UTF8");   

   if ($baglan->connect_error) {
      die("Connection failed: " . $baglan->connect_error);
  }
?>