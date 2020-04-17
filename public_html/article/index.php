<?php
    // Helpers
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/helpers/url.php';

    // Components
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/footer.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/title.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/menu-items.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/post_meta.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/subscribe.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/page-intro.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/articles/article.php';
    
?>

<?php echo nativedsd_header(); ?>

    <?php
        $intro = [
            "category" => "News",
            "title" => "This is the artist in the Spotlight",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
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