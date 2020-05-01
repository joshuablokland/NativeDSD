<?php include $_SERVER['DOCUMENT_ROOT'] . '/lib/includes.php'; ?>

<?php echo nativedsd_header(); ?>

    <?php
        $intro = [
            "category" => "News",
            "title" => "This is the artist in the Spotlight",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
        ];

        $hero_article = [
            "category" => "News",
            "title" => "Melody Moore, Artist in the Spotlight",
            "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080",
            "featured_img" => get_image_base_url("dev-hero.png")
        ];

        $article = [
            "category" => "News",
            "title" => "Melody Moore, Artist in the Spotlight",
            "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080",
            "featured_img" => get_image_base_url("dev-article-medium.png")
        ];
    ?>

    <div class="container news-intro mb-80 mb-md-64 mb-sm-48">
        <?php echo page_intro($intro); ?>
    </div>


<?php echo nativedsd_footer(); ?>
