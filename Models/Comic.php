<?php

class Comic{

    function __construct(public string $name, public string $author, public int $pubDate, public int $pagesCount, public string $cover){}

    function availableInLibraries($city){

        return "$this->name is now available in $city. The new masterpiece by $this->author is waiting for you in the major libraries. Give it a look, it's only $this->pagesCount pages!";
    }
}
?>