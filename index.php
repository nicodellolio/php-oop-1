<?php

include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Comic.php';
include_once __DIR__ . '/database/db.php';

?>


<!doctype html>
<html lang="en">

<head>
    <title>Productions and Comics DB</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>

    <header>
        <div class="logo">
            <img src="./assets/img/logo.png" alt="">
        </div>
        <nav class="menu">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>
        <div class="logo-bol">
            <img src="./assets/img/boolean.png" alt="" srcset="">
        </div>
    </header>

    <div class="container-fluid p-5 bg-secondary">
        <div class="row movies">
            <div class="description">MOVIES</div>
            <?php foreach ($movies as $movie) : ?>

                <div class="col-4">
                    <div class="card h-100">
                        <img src="<?= $movie->poster ?>" alt="">

                        <h3 class="title"><?= $movie->title ?></h3>

                        <h4 class="language"><?= $movie->language ?></h4>

                        <h1 class="rating"><?= $movie->rating ?></h1>

                        <div class="movie-info">
                            <small><?= $movie->profits ?></small>
                            <small><?= $movie->length ?></small>
                            <small><?= $movie->ageRate ?></small>
                            <small><?= $movie->year ?></small>
                        </div>


                        $profits
                        $length
                        ageRate
                        year

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <div class="row movies">
            <div class="description">SHOWS</div>
            <?php foreach ($shows as $show) : ?>

                <div class="col-4">
                    <div class="card h-100">
                        <img src="<?= $show->poster ?>" alt="">

                        <h3 class="title"><?= $show->title ?></h3>

                        <h4 class="language"><?= $show->language ?></h4>

                        <h1 class="rating"><?= $show->rating ?></h1>

                        <div class="show-info">
                            <span><?= $show->seasonCount ?></span>
                            <span><?= $show->ageRate ?></span>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <div class="row comics mt-5">
            <div class="description">COMICS</div>
            <?php foreach ($comics as $comic) : ?>
                <div class="col-3">
                    <div class="card h-100">
                        <img src="<?= $comic->cover ?>" alt="">

                        <h3 class="name"><?= $comic->name ?></h3>

                        <h4 class="author"><?= $comic->author ?></h4>

                        <h1 class="pubDate"><?= $comic->pubDate ?></h1>

                        <h6 class="pagesCount"><?= $comic->pagesCount ?> pag.</h6>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>