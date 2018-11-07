<?php function newArticle(){?>

    <form class="form-horizontal" action="addArticle.php" method="get">
    <fieldset>

    <!-- Form Name -->
    <legend>PRODUCTS</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">RUBRIK</label>
      <div class="col-md-4">
      <input id="product_name" name="product_name" placeholder="Rubrik..." class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_price">PRIS</label>
      <div class="col-md-4">
      <input id="product_price" name="product_price" placeholder="Pris..." class="form-control input-md" required="" type="number">

      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_description">PRODUKT BESKRIVNING</label>
      <div class="col-md-4">
        <textarea class="form-control" id="product_description" name="product_description" placeholder="Beskriv produkten..."></textarea>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_id">ANTAL</label>
      <div class="col-md-4">
      <input id="product_id" name="product_amount" placeholder="Antal" class="form-control input-md" required="" type="number">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">BILD</label>
      <div class="col-md-4">
      <input id="product_image" name="product_image" placeholder="Bild.jpg" class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label">SUBMIT</label>
      <div class="col-md-4">
        <button id="singlebutton" class="btn btn-primary">SUBMIT</button>
      </div>
      </div>

    </fieldset>
    </form>
<?php } ?>
