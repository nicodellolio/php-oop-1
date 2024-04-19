<?php
class Movie extends Production{

    public $genre;
    
    function __construct($title, $language,Genre $genre, $rating, $poster, public string $profits, public int $length, public int $ageRate, public int $year ){
        
        parent::__construct($title, $language, $rating, $poster);
        $this->genre = $genre;
    }

}

?>