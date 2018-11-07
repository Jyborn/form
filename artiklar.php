<?php

  require 'getAllArticlesModel.php';
  require 'showArticlesView.php';

  function artiklar() {
    $artiklar = getAllArticles();
    showArticlesView($artiklar);
  }

 ?>
