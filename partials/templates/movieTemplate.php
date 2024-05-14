<section>
    <div class="container w-75 py-4">
        <div class="row row-cols-md-2 row-cols-lg-3 g-3 justify-content-center">
            <?php foreach ($movies as $movie) { ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <div class="card-subtitle mb-2 text-muted"><?php echo $movie->director; ?></div>
                            <div><?php echo $movie->year; ?></div>
                            <div><?php echo $movie->country; ?></div>
                            <div><?php echo implode(', ', $movie->genre); ?></div>
                            <div><?php echo $movie->getDuration(); ?></div>
                            <div><?php echo $movie->rating; ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>