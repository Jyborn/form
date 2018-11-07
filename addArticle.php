<?php
  require 'dbconn.php';

  $db = dbconnect();

  $rubrik = filter_input(INPUT_GET, 'product_name', FILTER_SANITIZE_SPECIAL_CHARS);
  $pris = filter_input(INPUT_GET, 'product_price', FILTER_SANITIZE_SPECIAL_CHARS);
  $antal = filter_input(INPUT_GET, 'product_amount', FILTER_SANITIZE_SPECIAL_CHARS);
  $descript = filter_input(INPUT_GET, 'product_description', FILTER_SANITIZE_SPECIAL_CHARS);
  $image = filter_input(INPUT_GET, 'product_image', FILTER_SANITIZE_SPECIAL_CHARS);

  $stmt = $db->prepare('
    INSERT INTO artiklar (artikel_rubrik, artikel_antal, artikel_pris, artikel_beskriv, artikel_bild) VALUES (:rubrik, :antal, :pris, :beskriv, :bild);
  ');

  $stmt -> bindParam(':rubrik', $rubrik);
  $stmt -> bindParam(':antal', $antal);
  $stmt -> bindParam(':pris', $pris);
  $stmt -> bindParam(':beskriv', $descript);
  $stmt -> bindParam(':bild', $image);
  $stmt -> execute();

 ?>
