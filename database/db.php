<?php

include __DIR__ . '/../Models/Genre.php';

//genre new objects
$dramatic = new Genre('Dramatic', 'Strong emotional stories, focusing on character development and intense experiences');

//movie new objects
$roadhouse = new Movie('Road House', 'English', new Genre('Dramatic', 'Strong emotional stories, focusing on character development and intense experiences'),  7, './assets/img/movies/roadhouse.jpeg', 2523000, 180, 18, 2024);
$dragonBallF = new Movie('DBS: Resurrection F', 'Japanese', new Genre('Anime', 'Japanese animations characterized by stark colorful graphics about characters in action-filled plots'), 6, './assets/img/movies/dbs.jpg', 869200, 125, 6, 2015);
$poorThings = new Movie('Poor Things', 'English', new Genre('Adventure', 'Characters often exploring places they have not been before or doing things they have not done before.'), 8, './assets/img/movies/poor.jpeg', 3234900, 175, 16, 2023);
$movies = array($roadhouse, $dragonBallF, $poorThings);

//tvserie new objects
$brbad = new TVSerie('Breaking Bad', 'English', 10, 'assets/img/tvseries/brbad.jpeg', 5, 18);
$drhouse = new TVSerie('House', 'English', 9, 'assets/img/tvseries/drhouse.jpeg', 8, 16);
$queengamb = new TVSerie("The Queen's Gambit", 'English', 9, 'assets/img/tvseries/queengamb.jpeg', 1, 8);
$shows = array($brbad, $drhouse, $queengamb);

//comic new objects
$tex = new Comic('Tex Classic', 'Gianluigi Bonelli', 1968, 64, './assets/img/comics/TEXCLASSIC_186.jpg');
$onePiece = new Comic('One Piece #42', 'Eiichirō Oda', 2007, 180, './assets/img/comics/ONEPISC_042.jpg');
$superman = new Comic('Superman Vol.6 #13', 'Joshua Williamson', 1964, 201, './assets/img/comics/SUPERMAN6_013.jpg');
$apePlanet = new Comic('Il Pianeta delle Scimmie', 'David F. Walker', 2012, 321, './assets/img/comics/PIANETASC_001.jpg');

$comics = array($tex, $onePiece, $superman, $apePlanet);

?>