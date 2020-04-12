<?php
    // Helpers
    include $_SERVER['DOCUMENT_ROOT'] . '/helpers/url.php';

    // Components
    include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/title.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/post_meta.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/articles/article.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/articles/aricle-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/music-reviews/music-review.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/recordings/recording-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/recordings/recording.php';
    
    // Page components
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/latest-articles.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/news.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/music-reviews.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/recording-reports.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/hardware-updates.php';
?>

<?php echo nativedsd_header(); ?>

    <?php echo latest_articles(); ?>
    <?php echo news(); ?>
    <?php echo music_reviews(); ?>
    <?php echo recording_reports(); ?>
    <?php echo hardware_updates(); ?>

<?php echo nativedsd_footer(); ?>
