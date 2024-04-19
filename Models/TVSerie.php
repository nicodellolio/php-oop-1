<?php

class TVSerie extends Production{

    function __construct($title, $language, $rating, $poster, public string $seasonCount, public int $ageRate)
    {
        parent::__construct($title, $language, $rating, $poster);
    }

}

?>