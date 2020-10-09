<?php
  function updateUser($name,$surname){
    require "database.php";

    $guncelle = $db->prepare("UPDATE users SET name=:name , surname=:surname WHERE id=:id ");
    $guncelle->execute([
      "name"      => $name,
      "surname"   => $surname,
      "id"        => 2
    ]);

    if($guncelle){
      echo "Guncelleme başarılı!";
    }else{
      //header("location:uygulama.php?durum=no");
    }
  }

  function getUserById($user_id){
    require "database.php";

    $anasayfa = $db->prepare("SELECT * FROM users WHERE id=:id");
    $anasayfa->execute(["id" => $user_id]);

    $row = $anasayfa->fetch(PDO::FETCH_OBJ);

    return $row;
  }

 ?>
