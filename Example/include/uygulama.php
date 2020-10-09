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

  updateUser($name,$surname);

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
