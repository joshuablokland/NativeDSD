<?php
/**
 * hero
 * 
 * @param $hero = [
        "category" => "Recording Report",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-recording-reports-hero.png")
    ];
 * @param $align_image_right: boolean
 */

function hero($hero, $align_image_right = true) {
    $classes = [];

    if ($align_image_right == true) {
        array_push($classes, 'align-image-right');
    }

    return '
        <div class="row hero collapse-md '. implode(' ', $classes) .'">
            <div class="col-7 col-md-8 hero-image">
                <a class="link-wrapper" href="'. $hero['url'] .'" title="'. $hero['title'] .'">
                    <img src="'. $hero['featured_img'] .'" alt="'. $hero['title'] .'" />
                </a>
            </div>
            <div class="col-5 col-md-8 hero-text align-vertical align-center">
                <a class="link category" href="test.com" title="'. $hero['category'] .'">
                    '. $hero['category'] .'
                </a>
                <a href="'. $hero['url'] .'" title="'. $hero['title'] .'">
                    <h2>'. $hero['title'] .'</h2>
                </a>
                <a href="'. $hero['url'] .'" title="'. $hero['title'] .'">
                    <p class="paragraph styled">
                        '. $hero['description'] .'
                    </p>
                </a>
                '. post_meta($hero['author'], $hero['date']) .'
            </div>
        </div>
    ';
}
?>