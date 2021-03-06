<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/includes.php';
?>

<?php echo nativedsd_header(); ?>

    <?php
        $intro = [
            "title" => "News",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
        ];

        $hero_article = [
            "category" => "News",
            "title" => "Melody Moore, Artist in the Spotlight",
            "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080/article",
            "featured_img" => get_image_base_url("dev-hero.png")
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

    <div class="container news-intro mb-80 mb-md-64 mb-sm-48">
        <?php echo page_intro($intro); ?>
        <div class="row">
            <div class="col-12">
                <?php echo article_hero($hero_article, ['full-width']); ?>
            </div>
        </div>
        <div class="background right background-beige"></div>
    </div>

    <div class="container">
        <div class="row-masonry articles-large collapse-sm">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="col-6 col-sm-4 mb-64 mb-sm-32">
                    <?php echo article_large($article); ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <?php echo pagination(); ?>

<?php echo nativedsd_footer(); ?>
