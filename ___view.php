<?php if(isset($_GET['img'])) : ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/twentytwenty.css">
    </head>
    <body>

    <header>
      <div class="navbar navbar-light bg-light box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="http://dormitorium.kei.pl/nac-app/" class="navbar-brand d-flex align-items-center">
            <img src="assets/logo.png" class="img-logo">
          </a>
          <a href="#" class="btn btn-primary my-2">Pobierz wtyczkę</a>
        </div>
      </div>
    </header>

    <main role="main">
    
    <section class="jumbotron text-center">
        <div class="container-fluid">
          <p class="lead">
              <div id="compare" class='MMtwentytwenty-container'>  
                <img class="make-greyscale" src="img/<?php print $_GET['img'];?>.jpg"></p>
                <img src="img/<?php print $_GET['img'];?>.jpg"></p>
              </div>
          <p class="title-info">
          Sed accumsan a eros vel fermentum
          </p>
        </div>
    </section>




    <div class="album py-5 bg-light">
        <div class="container-fluid">

          <div class="row">

        <?php 
        
        $range = range(1,50);
        shuffle($range);
        $imgs = array_slice($range,0,4);
        ?>

          <?php foreach($imgs as $i) : ?>   

          <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <a href="./view.php?img=<?php print $i;?>"><img class="card-img-top" src="img/<?php print $i;?>.jpg" alt="Card image cap"></a>
              </div>
            </div>

           <?php endforeach;?> 


          </div>
        </div>
      </div>



    </main>



 

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./assets/js/jquery.event.move.js"></script>
        <script src="./assets/js/jquery.twentytwenty.js"></script>

        <script>

        $(document).ready(function() {
          
          var img = $('.make-greyscale');
          $('#compare').css('max-width',img.width());
          $("#compare").twentytwenty();
        });

        </script>

    </body>
</html>
<?php else: ?>
No błąd.
<?php endif;?>
