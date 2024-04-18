<?php 

include_once __DIR__ . '/Models/Productions.php';
include_once __DIR__ . '/Models/Comics.php';



$roadhouse = new Production('Road House', 'English', 7);
$dragonBallF = new Production('Dragon Ball Super: Resurrection F', 'Japanese', 6);
$poorThings = new Production('Poor Things', 'French', 8);

$tex = new Comics('Tex Classic', 'Gianluigi Bonelli', 1968, 64);
$onePiece = new Comics('One Piece #42', 'Eiichirō Oda', 2007, 180);
$superman = new Comics('Superman Vol.6 #13', 'Joshua Williamson', 1964, 201);
$apePlanet = new Comics('Il Pianeta delle Scimmie - La Caduta d/Uomo', 'David F. Walker', 2012, 321);

echo $superman -> availableInLibraries('Milan')

?>
