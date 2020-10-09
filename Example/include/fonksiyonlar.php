<?php
  function updateUser($name,$surname,$user_name,$telephone,$e_mail,$register_date,$profile_picture){
    require "database.php";

    $guncelle = $db->prepare("UPDATE users SET name=:name,
                                               surname=:surname,
                                               user_name=:user_name,
                                               telephone=:telephone,
                                               e_mail=:e_mail,
                                               register_date=:register_date,
                                               profile_picture=:profile_picture WHERE id=:id
                             ");
    $guncelle->execute([
      "name"            => $name,
      "surname"         => $surname,
      "user_name"       => $user_name,
      "telephone"       => $telephone,
      "e_mail"          => $e_mail,
      "register_date"   => $register_date,
      "profile_picture" => $profile_picture,
      "id"        => 1
    ]);

    if($guncelle){
      echo "Guncelleme başarılı!";
    }else{
      //header("location:uygulama.php?durum=no");
    }
  }

  function addUser($name,$surname,$user_name,$telephone,$e_mail,$register_date,$profile_picture){
    require "database.php";

    $ekle = $db->prepare("INSERT INTO users SET name=:name,
                                                surname=:surname,
                                                user_name=:user_name,
                                                telephone=:telephone,
                                                e_mail=:e_mail,
                                                register_date=:register_date,
                                                profile_picture=:profile_picture
                         ");

    $ekle->execute([
      "name"            => $name,
      "surname"         => $surname,
      "user_name"       => $user_name,
      "telephone"       => $telephone,
      "e_mail"          => $e_mail,
      "register_date"   => $register_date,
      "profile_picture" => $profile_picture
    ]);

    if($ekle){
      echo "Ekleme başarılı!";
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
