<?php

  function showArticlesView($artiklar) {

    echo "<div class='shop-items'>";
    echo "<div class='container-fluid'>";
    echo "<div class='row'>";

    foreach ($artiklar as $row) {
      $artikel = <<<ARTICLES
            <div class="col-md-3 col-sm-6">
              <!-- Restaurant Item -->
              <div class="item">
                <!-- Item's image -->
                <img class="img-responsive" src="images/{$row['artikel_bild']}" alt="Bild på produkt">
                <!-- Item details -->
                <div class="item-dtls"> {$row['artikel_beskriv']}
                  <!-- product title -->
                  <h4><a href="#">{$row['artikel_rubrik']}</a></h4>
                  <!-- price -->
                  <span class="price lblue">{$row['artikel_pris']}</span>
                </div>
                <!-- add to cart btn -->
                <div class="ecom bg-lblue">
                  <a class="btn" href="#">Add to cart</a>
                </div>
              </div>
            </div>
ARTICLES;

      echo $artikel;
    }

    echo "</div></div></div>";
  }

 ?>
