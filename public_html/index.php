<?php
    // Helpers
    include $_SERVER['DOCUMENT_ROOT'] . '/helpers/url.php';

    // Components
    include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/title.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/menu-items.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/post_meta.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/subscribe.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/articles/article.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/articles/aricle-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/music-reviews/music-review.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/recordings/recording-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/recordings/recording.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/components/hardware-updates/hardware-update-hero.php';
    
    
    // Page components
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/latest-articles.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/news.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/music-reviews.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/recording-reports.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/hardware-updates.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/pages/home/highlighted-articles.php';
    
?>

<?php echo nativedsd_header(); ?>

    <?php echo latest_articles(); ?>
    <?php echo news(); ?>
    <?php echo music_reviews(); ?>
    <?php echo recording_reports(); ?>
    <?php echo hardware_updates(); ?>
    
    <div class="container mb-128 mb-md-96 mb-sm-64">
        <div class="row">
            <div class="col-12">
                <?php echo subscribe(); ?>
            </div>
        </div>
    </div>
    
    <?php echo highlighted_articles(); ?>

<?php echo nativedsd_footer(); ?>
