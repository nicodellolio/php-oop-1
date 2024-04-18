<?php 

include_once __DIR__ . '/Models/Productions.php';
include_once __DIR__ . '/Models/Comics.php';


$roadhouse = new Production('Road House', 'English', 7);
$dragonBallF = new Production('Dragon Ball Super: Resurrection F', 'Japanese', 6);
$poorThings = new Production('Poor Things', 'French', 8);

$movies = array($roadhouse, $dragonBallF, $poorThings);


$tex = new Comics('Tex Classic', 'Gianluigi Bonelli', 1968, 64);
$onePiece = new Comics('One Piece #42', 'Eiichirō Oda', 2007, 180);
$superman = new Comics('Superman Vol.6 #13', 'Joshua Williamson', 1964, 201);
$apePlanet = new Comics('Il Pianeta delle Scimmie - La Caduta d/Uomo', 'David F. Walker', 2012, 321);

$comics = array($tex, $onePiece, $superman, $apePlanet);


?>


<!doctype html>
<html lang="en">
    <head>
        <title>Productions and Comics DB</title>
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    
    <body>
        
        
        <div class="container">
            <div class="row-cols-3">
                
                <?php 
                foreach ($movie as $movies){
                    echo                 
                    '<div class="col">
                        <div class="card">' . 
                            $movie->title
                        . '</div>
                    </div>'
                ;}
                ?>

                <div class="col">
                    <div class="card">
                        
                    </div>
                </div>
            </div>
        </div>



        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
