<?php
    require_once __DIR__ . '/classes/Movie.php';

    $movies = [
        new Movie("Man of steel", "2013", "143", "fantasy", "Zack Snyder","Henry Cavill"),
        new Movie("Batman v Superman: Dawn of Justice", "2016", "151", "fantasy", "Zack Snyder","Henry Cavill, Ben Affleck"),
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <?php foreach($movies as $movie) { ?>
        <div>
            <h2><?php echo $movie->title ?></h2>
            <ul>
                <li>Years: <?php echo $movie->year ?></li>
                <li>Runtime: <?php echo $movie->runtime ?></li>
                <li>Genre: <?php echo $movie->genre ?></li>
                <li>Director: <?php echo $movie->director ?></li>
                <li>Actors: <?php echo $movie->actor ?></li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>