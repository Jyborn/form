<?php

  function getAllArticles() {

    $db = dbconnect();
    $results = $db->query('SELECT * FROM artiklar');

    return $results;
  }

 ?>
