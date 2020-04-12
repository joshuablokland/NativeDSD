<?php
    // Helpers
    include $_SERVER['DOCUMENT_ROOT'] . '/helpers/url.php';

    // Components
    include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/title.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/post_meta.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/articles/article.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/articles/aricle_hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/music-reviews/music-review.php';
    
    // Page components
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/latest_articles.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/news.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/music-reviews.php';
?>

<?php echo nativedsd_header(); ?>

    <?php echo latest_articles(); ?>
    <?php echo news(); ?>
    <?php echo music_reviews(); ?>

<?php echo nativedsd_footer(); ?>
