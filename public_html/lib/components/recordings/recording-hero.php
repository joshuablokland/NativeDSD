<?php
/**
 * recording_hero
 * 
 * @param $recording_hero = [
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

function recording_hero($recording_hero, $align_image_right = true) {
    $classes = [];

    if ($align_image_right == true) {
        array_push($classes, 'align-image-right');
    }

    return '
        <div class="row recording-hero collapse-md '. implode(' ', $classes) .'">
            <div class="col-7 col-md-8 recording-hero-image">
                <a class="link-wrapper" href="'. $recording_hero['url'] .'" title="'. $recording_hero['title'] .'">
                    <img src="'. $recording_hero['featured_img'] .'" alt="'. $recording_hero['title'] .'" />
                </a>
            </div>
            <div class="col-5 col-md-8 recording-hero-text align-vertical align-center">
                <a class="link category" href="test.com" title="'. $recording_hero['category'] .'">
                    '. $recording_hero['category'] .'
                </a>
                <a href="'. $recording_hero['url'] .'" title="'. $recording_hero['title'] .'">
                    <h2>'. $recording_hero['title'] .'</h2>
                </a>
                <a href="'. $recording_hero['url'] .'" title="'. $recording_hero['title'] .'">
                    <p class="paragraph styled">
                        '. $recording_hero['description'] .'
                    </p>
                </a>
                '. post_meta($recording_hero['author'], $recording_hero['date']) .'
            </div>
        </div>
    ';
}
?>