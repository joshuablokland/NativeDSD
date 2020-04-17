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
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/articles/article.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/articles/article-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/music-reviews/music-review.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/recordings/recording-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/recordings/recording.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/hardware-updates/hardware-update-hero.php';
    
    
    // Page components
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/latest-articles.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/news.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/music-reviews.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/recording-reports.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/hardware-updates.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/highlighted-articles.php';
    
?>

<?php echo nativedsd_header(); ?>

    <?php echo latest_articles(); ?>
    <?php echo news(); ?>
    <?php echo music_reviews(); ?>
    <?php echo recording_reports(); ?>
    <?php echo hardware_updates(); ?>
    
    <section class="container mb-128 mb-md-96 mb-sm-64">
        <div class="row">
            <div class="col-12">
                <?php echo subscribe(); ?>
            </div>
        </div>
    </section>
    
    <?php echo highlighted_articles(); ?>

<?php echo nativedsd_footer(); ?>
