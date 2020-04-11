<?php

/**
 * music_review_small($music_review)
 * 
 * @param $music_review = [
 *   "category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function music_review_small($music_review) {
    return '
        <div class="music-review-small">
            <a class="link-wrapper" href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                <img src="'. $music_review['featured_img'] .'" alt="'. $music_review['title'] .'"/>
            </a>
            <div class="music-review-small-text">
                <a class="link category" href="test.com" title="'. $music_review['category'] .'">
                    '. $music_review['category'] .'
                </a>
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <h4>'. $music_review['title'] .'</h4>
                </a>
            </div>
        </div>
    ';
}

/**
 * music_review_medium($music_review)
 * 
 * @param $music_review = [
 *   "category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function music_review_medium($music_review) {
    return '
        <div class="music-review-medium">
            <a class="link-wrapper mb-24" href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                <img src="'. $music_review['featured_img'] .'" alt="'. $music_review['title'] .'"/>
            </a>
            <div>
                <a class="link category" href="test.com" title="'. $music_review['category'] .'">
                    '. $music_review['category'] .'
                </a>
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <h2>'. $music_review['title'] .'</h2>
                </a>
                <p class="music-review-meta">
                    <a class="link author" href="test.com" title="'. $music_review['author'] .'">'. $music_review['author'] .'</a> on '. $music_review["date"] .'
                </p>
            </div>
        </div>
    ';
}

/**
 * music_review_large($music_review)
 * 
 * @param $music_review = [
 *   "category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
 *   "author" => "Floor van der Holst",
 *   "date" => "May 02, 2019",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function music_review_large($music_review) {
    return '
        <div class="music-review-large">
            <a class="link-wrapper mb-24" href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                <img src="'.$music_review['featured_img'].'" alt="'. $music_review['title'] .'"/>
            </a>
            <div>
                <a class="link category" href="test.com" title="'. $music_review['category'] .'">
                    '. $music_review['category'] .'
                </a>
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <h2>'. $music_review['title'] .'</h2>
                </a>
                <a class="description" href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <p class="paragraph styled">'. $music_review['description'] .'</p>
                </a>
                <p class="music-review-meta">
                    <a class="link author" href="test.com" title="'. $music_review['author'] .'">'. $music_review['author'] .'</a> on '. $music_review["date"] .'
                </p>
            </div>
        </div>
    ';
}

?>