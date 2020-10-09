<?php
  include "fonksiyonlar.php";
  require "database.php";

  echo "hello world! <br><br>";
  /*
  $user = getUserById(2);
  echo $user->user_name;
  */
  $name = "ok";
  $surname = "y";
  $user_name="oky01";
  $telephone="1234567890";
  $e_mail="oky@oky.com";
  $register_date="09.10.2020";
  $profile_picture="oky.jpg";

  //addUser($name,$surname,$user_name,$telephone,$e_mail,$register_date,$profile_picture);

  //updateUser($name,$surname);

  /*
  if(isset($_GET["durum"]) == "ok"){
    ?>
      <div class="alert alert-succes">
        Bilgileriniz başarı ile güncellendi.
      </div>
    <?php
  }
  if(isset($_GET["durum"]) == "no"){
    ?>
      <div class="alert alert-danger">
        Güncelleme sırasında bir hata oluştu.
      </div>
    <?php
  }
  */
?>
