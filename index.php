<?php
  mb_internal_encoding('UTF-8');
  session_start();

  require 'top.php';
  require 'menu.php';
  require 'loginPopUp.php';
  require 'newArticle.php';
  require 'bottom.php';
  require 'artiklar.php';
  require 'dbconn.php';

  if (isset($_GET['page']) && $_GET['page'] == "newArticle" && isset($_SESSION['username'])) {
    top();
    menu();
    newArticle();
    bottom();
  } else if (isset($_GET['page']) && $_GET['page'] == "artiklar") {
    top();
    menu();
    artiklar();
    bottom();
  } else {
    top();
    menu();

    bottom();
  }

?>
