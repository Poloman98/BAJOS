<?php
  include_once 'view/Header.php';
  include_once 'view/Navbar.php';
  include_once 'view/Slider.php';
  include_once 'ModalRegistro.php';
?>

<body>
    
    <div class="container col-12">
        <div class="row">
            <div class="listado col-12">
                <h1 id="list">Listado de instrumentos</h1>
            </div>
            <br>

      <!-- Convertir en QUERY -->  
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img id="img_obs" src="img/bajos-4-cuerdas.jpg"></h5>
                        <p class="card-text"><label id="desayuno">Fender Jazz Bass</label><br> Precio: $1'400.000</p>
                        <p class="collapse" id="collapseExample">
                        Basado en la serie Player, la serie Player Plus está equipada por un juego de pastillas Player Plus Noiseless ™ Jazz Bass, y un ecualizador activo de 3 banda con un interruptor para cambiar entre el modo activo o pasivo. El mástil del Player Plus Jazz Bass es rápido gracias a su acabado satinado con los bordes redondeados en un diapasón con radio de 12” en forma de “Modern C”. Para el puente se ha seleccionado el HiMass ™, un puente sólido como una roca que proporciona sustain, resonancia y entonación perfecta. Con el estilo clásico de Fender, funciones avanzadas e impresionantes acabados nuevos, el Player Plus Jazz Bass es la herramienta perfecta si necesitas versatilidad en tu sonido.
                        </p>
                        <p class="card-text text-right">
                            <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-primary">Añadir al Carrito</a>
                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
                        </p>
                    </div>
                </div>
            </div>
      <!-- Convertir en QUERY -->  
              <?php
                  // while ($con=mysql_fetch_array($query))
                  // {
                  //   echo "<div class='col-sm-3'>".
                  //           "<div class='card'>".
                  //               "<div class='card-body'>".
                  //                   "<h5 class='card-title text-center'><img id='img_obs' src='img/bajos-4-cuerdas.jpg'></h5>".
                  //                   "<p class='card-text'><label id='desayuno'>Fender Jazz Bass</label><br> Precio: $1400.000</p>".
                  //                   "<p class='collapse' id='collapseExample'>".$con['OBSERVACION']."</p>".
                  //                   "<p class='card-text text-right'>".
                  //                   "<a data-toggle='modal' data-target='#exampleModal3' href='#' class='btn btn-primary'>Añadir al Carrito</a>".
                  //                   "<a data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample' href='#' class='btn bt-success'>Más >></a>".
                  //                   "</p>".
                  //                 "</div>".
                  //               "</div>".
                  //           "</div>";
                  // }          

              ?>
                                
        </div>
    </div>

    <script src="js/indexjs.js "></script>
</body>
</html>