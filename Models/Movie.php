<?php

class Movie extends Production{

    
    function __construct($title, $language, $rating, $poster, public string $profits, public int $length, public int $ageRate, public int $year ){
        parent::__construct($title, $language, $rating, $poster);
    }

}

?>