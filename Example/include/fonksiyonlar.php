<?php
  //10.10.2020 Çalışıyor
  function updateUser($name,$surname,$telephone,$e_mail,$profile_picture,$status){
    require "database.php";

    $guncelle = $db->prepare("UPDATE users SET name=:name,
                                               surname=:surname,
                                               telephone=:telephone,
                                               e_mail=:e_mail,
                                               profile_picture=:profile_picture,
                                               status=:status WHERE id=:id
                             ");
    $guncelle->execute([
      "name"            => $name,
      "surname"         => $surname,
      "telephone"       => $telephone,
      "e_mail"          => $e_mail,
      "profile_picture" => $profile_picture,
      "status"          => $status,
      "id"              => 1
    ]);

    if($guncelle){
      echo "Guncelleme başarılı!";
    }else{
      //header("location:uygulama.php?durum=no");
    }
  }

  //10.10.2020 Çalışıyor
  function addUser($name,$surname,$telephone,$e_mail,$profile_picture,$status){
    require "database.php";

    $ekle = $db->prepare("INSERT INTO users SET name=:name,
                                                surname=:surname,
                                                telephone=:telephone,
                                                e_mail=:e_mail,
                                                profile_picture=:profile_picture,
                                                status=:status
                         ");

    $ekle->execute([
      "name"            => $name,
      "surname"         => $surname,
      "telephone"       => $telephone,
      "e_mail"          => $e_mail,
      "profile_picture" => $profile_picture,
      "status"          => $status
    ]);

    if($ekle){
      echo "Ekleme başarılı!";
    }else{
      //header("location:uygulama.php?durum=no");
    }
  }

  //10.10.2020 Çalışıyor
  function getUserById($user_id){
    require "database.php";

    $anasayfa = $db->prepare("SELECT * FROM users WHERE id=:id");
    $anasayfa->execute(["id" => $user_id]);

    $row = $anasayfa->fetch(PDO::FETCH_OBJ);

    return $row;
  }

  function get_appointment_times(){
    require "database.php";

    $appointment_times = $db->query("SELECT * FROM appointment_time")->fetchAll(PDO::FETCH_OBJ);

    return $appointment_times;
  }

  function get_appointment_time_by_name($appointment_t){
    require "database.php";

    $appointment_time = $db->prepare("SELECT * FROM appointment_time WHERE appointment_time=:appointment_time");
    $appointment_time->execute(["appointment_time" => $appointment_t]);

    $row = $appointment_time->fetch(PDO::FETCH_OBJ);

    return $row->id;
  }


  function add_e_appointment($name_surname,$e_mail,$telephone,$appointment_date,$appointment_time_id,$read_receipt){
    require "database.php";

    $ekle = $db->prepare("INSERT INTO e_randevu_talep SET name_surname=:name_surname,
                                                          e_mail=:e_mail,
                                                          telephone=:telephone,
                                                          appointment_date=:appointment_date,
                                                          appointment_time_id=:appointment_time_id,
                                                          read_receipt=:read_receipt
                         ");

    $ekle->execute([
      "name_surname"        => $name_surname,
      "e_mail"              => $e_mail,
      "telephone"           => $telephone,
      "appointment_date"    => $appointment_date,
      "appointment_time_id" => $appointment_time_id,
      "read_receipt"        => $read_receipt
    ]);

    if($ekle){
      header("location:erandevu.php?durum=ok");
    }else{
      header("location:erandevu.php?durum=no");
    }
  }
 ?>
