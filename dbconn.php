<?php

  function dbconnect() {
    try {

      $conn= new PDO('mysql:host=localhost;dbname=artikel2019;charset=utf8','root','');
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    }catch(PDOException $e){

      echo 'ERROR '.$e->getMessage();

    }

    return $conn;
  }

?>
