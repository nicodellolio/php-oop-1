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
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        * {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        header {
            display: flex;
            justify-content: space-around;
            padding: 1.5rem;
            align-items: center;
            background-color: #9f9d9d;

            & img {
                height: 100px;
                color: #ededed;
            }

            nav {
                a {
                    text-decoration: none;
                    color: black;
                    margin: 0 2rem;
                    font-size: 2rem;
                }
            }
        }

        .description {
            text-align: center;
            margin-bottom: 1rem;
            font-size: 5rem;
        }

        .production {
            .main-info {
                display: flex  ;
                position: relative;
                padding: 0.5rem;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
            }

            .title {
                width: 100%;
                text-align: center;
                font-size: 3rem;
                background-color: #ededed;
            }
            .my_footer_card{
                display: flex;
                justify-content: space-around;
                font-size: 1.5rem;
            }

            .language {
                font-size: 1.5rem;
            }
            .year{
                font-size: 1.25rem;
            }

            .rating {
                width: fit-content;
                color: gold;
                border: 5px solid black;
                border-radius: 50%;
                padding: 0.5rem 1.5rem;
                background-color: grey;
            }
        }

        .box-prod {
            padding: 10rem;
        }

        .comics {
            margin-top: 5%;

            .card {
                color: darkslategrey;
            }

            img {
                height: 100%;
                margin-bottom: 1rem;
            }

            .name {
                font-size: 2rem;
                margin-bottom: 2rem;
                color: darkblue;
            }

            .pagesCount {
                position: absolute;
                bottom: 1rem;
                right: 1rem;
                font-size: 1.2rem;
            }

        }
    </style>

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
        <div class="row production">
            <div class="description">MOVIES</div>
            <?php foreach ($movies as $movie) : ?>

                <div class="col-4">
                    <div class="card">

                    <img class="w-100" src="<?= $movie->poster ?>" alt="">

                        <div class="main-info">

                            <h3 class="title"><?= $movie->title ?></h3>

                            <div>
                                <h4 class="language"><?= $movie->language ?></h4>
                                <small class="year"><?= $movie->year ?></small>
                            </div>

                            <h1 class="rating"><?= $movie->rating ?></h1>
                        </div>

                        <div class="card-footer my_footer_card">
                            <small class="text-success">Profits: $<?= $movie->profits ?></small>
                            <small>Length: <?= $movie->length ?>min.</small>
                            <small class="text-danger"><?= $movie->ageRate ?>+</small>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <div class="row production">
            <div class="description">SHOWS</div>
            <?php foreach ($shows as $show) : ?>

                <div class="col-4">
                    <div class="card h-100">
                        <img clas="w-100" src="<?= $show->poster ?>" alt="">

                        <div class="main-info">

                            <h3 class="title"><?= $show->title ?></h3>
                            
                            <h4 class="language"><?= $show->language ?></h4>
                            
                            <h1 class="rating"><?= $show->rating ?></h1>
                            
                        </div>

                        <div class="card-footer my_footer_card">
                            <small>Length: <?= $show->seasonCount ?> seasons</small>
                            <small class="text-danger"><?= $show->ageRate ?>+</small>
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