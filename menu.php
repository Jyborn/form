<?php
  function menu() {
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="index.php?page=artiklar">Artiklar</a>
      <a class="nav-item nav-link" href="index.php?page=newArticle">Lägg till artiklar</a>
    </div>
  </div>
  <button id="logOutButton" type="button" class="btn btn-primary">Logout</button>
  <button id="loginButton" type="button" class="btn btn-primary">Login</button>
</nav>

<?php
  }
?>
