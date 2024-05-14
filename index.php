<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap CSS -->
</head>
<body>
    <?php include __DIR__ . '/partials/templates/header.php'; ?>
    <main>
        <div class="container w-75 py-4">
            <div class="row row-cols-md-2 row-cols-lg-3 g-3 justify-content-center">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->title; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->director; ?></h6>
                                <p class="card-text"><?php echo $movie->year; ?></p>
                                <p class="card-text"><?php echo $movie->country; ?></p>
                                <p class="card-text"><?php echo implode(', ', $movie->genre); ?></p>
                                <p class="card-text"><?php echo $movie->duration; ?></p>
                                <p class="card-text"><?php echo $movie->rating; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- /Bootstrap JS -->
</body>
</html>