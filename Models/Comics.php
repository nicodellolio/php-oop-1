<?php

class Comics{

    function __construct(public string $name, public string $author, public int $pubDate, public int $pagesCount)
    {

        $this->name = $name;
        $this->author = $author;
        $this->pubDate = $pubDate;
        $this->pagesCount = $pagesCount;
    }

    /* public */ function availableInLibraries($city){

        return "$this->name is now available in $city. The new masterpiece by $this->author is waiting for you in the major libraries. Give it a look, it's only $this->pagesCount pages!";
    }
}
?>