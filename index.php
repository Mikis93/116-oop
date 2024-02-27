<?php
// index.php

// Inclusione dei file delle classi
include_once __DIR__ . '/Models/Movie.php';

$path = __DIR__ . '/database/movies.json';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);
// var_dump($jsonData);

// $movie1= new Movie(1, 'Inception', 'Thriller'); echo '<pre>';
// var_dump($movie1); echo '</pre>';

// $movie2= new Movie(2, 'Peaky Blinders', 'Serie TV'); echo '<pre>';
// var_dump($movie2); echo '</pre>';

$movies = [];

foreach ($jsonData as $movie) {
    // var_dump($movie);
    $movies[] = new Movie($movie['id'], $movie['title'], '');
}
var_dump($movies);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <h2>Film</h2>
            </div>
            <div class="row">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?=$movie->getUpperTitle()?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>