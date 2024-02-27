<?php
// index.php

// Inclusione dei file delle classi
include_once __DIR__ . '/Models/Movie.php';

$movie1= new Movie(1, 'Inception', 'Thriller'); echo '<pre>';
var_dump($movie1); echo '</pre>';

$movie2= new Movie(2, 'Peaky Blinders', 'Serie TV'); echo '<pre>';
var_dump($movie2); echo '</pre>';

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

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>