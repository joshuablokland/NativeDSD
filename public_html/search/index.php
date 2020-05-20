<?php include $_SERVER['DOCUMENT_ROOT'] . '/lib/includes.php'; ?>

<?php echo nativedsd_header(); ?>

    <?php
        $review = [
            "title" => "An American Song Album",
            "artist" => "Mandy Moore, Bradley Moore",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080/review",
            "featured_img" => get_image_base_url("dev-music-review-small.png")
        ];

        $article = [
            "category" => "News",
            "title" => "Melody Moore, Artist in the Spotlight",
            "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080/article",
            "featured_img" => get_image_base_url("dev-article-medium.png")
        ];
    ?>

    <div class="search">
        <section class="container search-header py-96 py-sm-48">
            <div class="row">
                <div class="col-8 col-md-8">
                    <h1 class="mb-48 mb-sm-24">
                        500 search results for: &quot;<?php echo $_GET["search"]; ?>&quot;
                    </h1>
                    <?php echo search_form(); ?>
                </div>
            </div>
            <div class="background background-beige"></div>
        </section>

        <section class="container mt-64 mb-48 mt-sm-32 mb-sm-0">
            <?php echo section_title_border('Author', false, ['mb-48 mb-sm-24'], ['text' => 'View all', 'url' => 'http://localhost:8080']); ?>
            <div class="row">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="col-3 col-md-4 col-sm-4 mb-32">
                        <?php echo author(['name' => 'Floor van der Holst', 'function' => 'Marketing & Label Manager']); ?>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <section class="container mt-64 mb-32 mt-sm-32 mb-sm-0">
            <?php echo section_title_border('Reviews', false, ['mb-48 mb-sm-24'], ['text' => 'View all', 'url' => 'http://localhost:8080']); ?>
            <div class="row">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="col-3 col-md-4 col-sm-4 mb-48 mb-sm-32">
                        <?php echo music_review_medium($review); ?>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <section class="container mt-64 mb-48 mt-sm-32 mb-sm-0">
            <?php echo section_title_border('Articles', false, ['mb-48 mb-sm-24'], ['text' => 'View all', 'url' => 'http://localhost:8080']); ?>
            <div class="row">
                <?php for ($i = 0; $i < 9; $i++) : ?>
                    <div class="col-4 col-md-4 col-sm-4 mb-32 mb-sm-0">
                        <?php echo article_medium($article); ?>
                    </div>
                <?php endfor; ?>
            </div>
        </section>
    </div>

<?php echo nativedsd_footer(); ?>
