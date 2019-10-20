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
    </head>
    <body class="first">
    <header>
      <div class="navbar navbar-light bg-light box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="assets/logo.png" class="img-logo">
          </a>
          <a href="http://dormitorium.kei.pl/nac-app/" class="btn btn-primary my-2">Pobierz wtyczkę</a>
        </div>
      </div>
    </header>
    <main role="main">
    
    <section class="jumbotron jumbotron-first text-center">
        <div class="container">
        </div>
    </section>
    

    <div class="album py-5 bg-light app-gallery">
        <div class="container-fluid grid app-gallery">

          <div class="row">
            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
                
              </div>
            </div>
            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
                <a href="./view.php?img=1"><img class="card-img-top" src="img/1.jpg" alt="Card image cap"></a>
                
              </div>
            </div>
            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
              <a href="./view.php?img=4"><img class="card-img-top" src="img/4.jpg" alt="Card image cap"></a>
                
              </div>
            </div>

            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
              <a href="./view.php?img=2"><img class="card-img-top" src="img/2.jpg" alt="Card image cap"></a>
                
              </div>
            </div>
            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
              <a href="./view.php?img=5"><img class="card-img-top" src="img/5.jpg" alt="Card image cap"></a>
                
              </div>
            </div>
            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
              <a href="./view.php?img=7"><img class="card-img-top" src="img/7.jpg" alt="Card image cap"></a>
                
              </div>
            </div>

            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
              <a href="./view.php?img=6"><img class="card-img-top" src="img/6.jpg" alt="Card image cap"></a>
                
              </div>
            </div>
            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
              <a href="./view.php?img=8"><img class="card-img-top" src="img/8.jpg" alt="Card image cap"></a>
                
              </div>
            </div>
            <div class=" grid-item">
              <div class="card mb-4 box-shadow">
              <a href="./view.php?img=9"><img class="card-img-top" src="img/9.jpg" alt="Card image cap"></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>


    </main>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script>
        
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 100
        });
        
        </script>
    </body>
</html>
