<h1>PÁGINA DE CATÁLOGO</h1>


<div id="catalogo" class="catalogo">

  <?php
  for ($i=0; $i < 4; $i++) { 
    $variable = "";
    $variable = $variable .  '<div class="card" style="width: 18rem;">';
    $variable = $variable . '  <img class="card-img-top" src="..." alt="Card image cap">';
    $variable = $variable . '  <div class="card-body">';
    $variable = $variable . '    <h5 class="card-title">Producto 1</h5>';
    $variable = $variable . '    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';
    $variable = $variable . '    <a href="#" class="btn btn-primary" id="btn-primary">Go somewhere</a>';
    $variable = $variable . '  </div>';
    $variable = $variable . '</div>';
    echo $variable;   
  }
  ?>

  <!-- <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Producto 1</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary" id="btn-primary">Go somewhere</a>
    </div>
  </div> -->

</div>

