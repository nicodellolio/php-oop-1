<?php

include_once __DIR__ . '/Models/Productions.php';
include_once __DIR__ . '/Models/Comics.php';


$roadhouse = new Production('Road House', 'English', 7, './assets/img/movies/roadhouse.jpeg');
$dragonBallF = new Production('Dragon Ball Super: Resurrection F', 'Japanese', 6, './assets/img/movies/dbs.jpg');
$poorThings = new Production('Poor Things', 'French', 8, './assets/img/movies/poor.jpeg');

$movies = array($roadhouse, $dragonBallF, $poorThings);


$tex = new Comics('Tex Classic', 'Gianluigi Bonelli', 1968, 64, './assets/img/comics/TEXCLASSIC_186.jpg');
$onePiece = new Comics('One Piece #42', 'Eiichirō Oda', 2007, 180, './assets/img/comics/ONEPISC_042.jpg');
$superman = new Comics('Superman Vol.6 #13', 'Joshua Williamson', 1964, 201, './assets/img/comics/SUPERMAN6_013.jpg');
$apePlanet = new Comics('Il Pianeta delle Scimmie', 'David F. Walker', 2012, 321, './assets/img/comics/PIANETASC_001.jpg');

$comics = array($tex, $onePiece, $superman, $apePlanet);


?>


<!doctype html>
<html lang="en">

<head>
    <title>Productions and Comics DB</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>
    
    <header>
        <div class="logo">
            <img src="./assets/img/logo.png" alt="">
        </div>
        <nav class="menu">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>
        <div class="logo-bol">
            <img src="./assets/img/boolean.png" alt="" srcset="">
        </div>
    </header>

    <div class="container-fluid p-5 bg-secondary">
        <div class="row movies">
        <div class="description">MOVIES</div>
            <?php
            foreach ($movies as $movie) {
                echo
                '<div class="col-4">
                        <div class="card h-100">
                            <img src="' . $movie->poster . '" alt=""> 
                        
                            <h3 class="title">' . $movie->title . '</h3>

                            <h4 class="language">' . $movie->language . '</h4>

                            <h1 class="rating">' . $movie->rating . '</h1>
                        
                        </div>
                    </div>';
            }
            ?>
        </div>
        <div class="row comics mt-5">
            <div class="description">COMICS</div>
            <?php
            foreach ($comics as $comic) {
                echo
                '<div class="col-3">
                        <div class="card h-100">
                            <img src="' . $comic->cover . '" alt=""> 
                        
                            <h3 class="name">' . $comic->name . '</h3>

                            <h4 class="author">' . $comic->author . '</h4>

                            <h1 class="pubDate">' . $comic->pubDate . '</h1>

                            <h6 class="pagesCount">' . $comic->pagesCount . ' pag.</h6>
                        
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>