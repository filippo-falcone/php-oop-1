<section>
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
</section>