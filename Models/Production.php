
<?php 

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/TVSerie.php';

class Production {

    function __construct(public string $title, public string $language, public int $rating, public string $poster ){}

    function isNowOut($language) {
        return "$this->title is now available in $language. You better rush, because it's been rated $this->rating!";
    }

    function toBeDeleted() {
        return "$this->title is gonna be available on this store for a short time yet. You better watch it before it's gone!";
    }
}

?>