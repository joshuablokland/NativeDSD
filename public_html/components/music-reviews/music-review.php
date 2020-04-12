<?php

/**
 * music_review_small($music_review)
 * 
 * @param $music_review = [
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "artist" => "Mandy Moore, Bradley Moore",
 *   "author" => "Floor van der Holst",
 *   "date" => "May 02, 2019",
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
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <h4>'. $music_review['title'] .'</h4>
                </a>
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <p class="paragraph mb-8">'. $music_review['artist'] .'</p>
                </a>
                '. post_meta($music_review['author'], $music_review["date"]) .'
            </div>
        </div>
    ';
}

/**
 * music_review_medium($music_review)
 * 
 * @param $music_review = [
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "artist" => "Mandy Moore, Bradley Moore",
 *   "author" => "Floor van der Holst",
 *   "date" => "May 02, 2019",
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
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <h2>'. $music_review['title'] .'</h2>
                </a>
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <p class="paragraph mb-8">'. $music_review['artist'] .'</p>
                </a>
                '. post_meta($music_review['author'], $music_review["date"]) .'
            </div>
        </div>
    ';
}

/**
 * music_review_large($music_review)
 * 
 * @param $music_review = [
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "artist" => "Mandy Moore, Bradley Moore",
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
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <h1>'. $music_review['title'] .'</h1>
                </a>
                <a href="'. $music_review['url'] .'" title="'. $music_review['title'] .'">
                    <p class="paragraph">'. $music_review['artist'] .'</p>
                </a>
                '. post_meta($music_review['author'], $music_review["date"]) .'
            </div>
        </div>
    ';
}

?>