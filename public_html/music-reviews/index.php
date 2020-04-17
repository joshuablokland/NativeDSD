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
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/pagination.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/music-reviews/music-review.php';
    
?>

<?php echo nativedsd_header(); ?>

    <?php 
        $intro = [
            "title" => "Music Reviews",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
        ];

        $large_review = [
            "title" => "An American Song Album",
            "artist" => "Chance the Rapper, Nirvana, Fleetwood Mac, Coldplay",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080",
            "featured_img" => get_image_base_url("dev-music-review-large.png")
        ];

        $review = [
            "title" => "An American Song Album",
            "artist" => "Mandy Moore, Bradley Moore",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080",
            "featured_img" => get_image_base_url("dev-music-review-small.png")
        ];
    ?>

    <section class="music-reviews-intro mb-128 mb-md-64 mb-sm-16">
        <div class="container">
            <?php echo page_intro($intro); ?>
        </div>
        <div class="container music-reviews highlight-left">
            <div class="row collapse-md">
                <div class="col-5 col-md-8 music-reviews-list">
                    <div>
                        <?php for ($i = 0; $i < 3; $i++) : ?>
                            <div class="spacer-border">
                                <?php echo music_review_small($review); ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="col-5 col-md-8 music-reviews-highlight mb-md-48 mb-sm-48">
                    <?php echo music_review_large($large_review) ?>
                </div>
            </div>
        </div>
        <div class="background right background-beige"></div>
    </section>

    <section class="container music-reviews">
        <div class="row mb-16 mb-sm-0">
            <?php for ($i = 0; $i < 12; $i++) : ?>
                <div class="col-3 col-md-4 mb-48 mb-sm-32">
                    <?php echo music_review_medium($review); ?>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <?php echo pagination(); ?>

<?php echo nativedsd_footer(); ?>