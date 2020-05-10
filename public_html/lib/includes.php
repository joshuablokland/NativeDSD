<?php
    // Helpers
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/helpers/url.php';

    // Components
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/footer.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/page-intro.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/pagination.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/title.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/menu-items.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/post-meta.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/subscribe.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/subscribe-popup.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/music-player.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/articles/article.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/articles/article-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/music-reviews/music-review.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/recordings/recording-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/recordings/recording.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/hardware-updates/hardware-update-hero.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/components/albums/album-promotion.php';
    
    // Page components Homepage
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/latest-articles.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/news.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/music-reviews.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/recording-reports.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/hardware-updates.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/lib/pages/home/highlighted-articles.php';
?>