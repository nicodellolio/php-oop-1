
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
        return "$this->title is now available in $language. You better rush, because it's been rated $this->rating!";
    }

    /* public */ function toBeDeleted() {
        return "$this->title is gonna be available on this store for a short time yet. You better watch it before it's gone!";
    }
}

// var_dump($roadhouse);
// var_dump($poorThings);
// var_dump($dragonBallF);

// echo $roadhouse -> isNowOut('French') . '<br><hr>';
// echo $dragonBallF -> isNowOut('Spanish') . '<br><hr>';
// echo $poorThings -> toBeDeleted();


?>