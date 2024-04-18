<?php 

class Production {
    // public string $title;
    // public string $language;
    // public int $rating;

    function __construct(public string $title, public string $language, public int $rating ){

        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    /* public */ function isNowOut($language) {
        return "$this->title is now available in $language. You better rush, because it's been rated $this->rating";
    }
}




?>