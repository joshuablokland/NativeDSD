<?php
/**
 * recording_hero
 * 
 * @param $recording = [
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

function recording_hero($recording, $align_image_right = true) {
    $classes = [];

    if ($align_image_right == true) {
        array_push($classes, 'align-image-right');
    }

    return '
        <div class="row recording-hero collapse-md '. implode(' ', $classes) .'">
            <div class="col-7 col-md-8 recording-hero-image">
                <a class="link-wrapper" href="'. $recording['url'] .'" title="'. $recording['title'] .'">
                    <img src="'. $recording['featured_img'] .'" alt="'. $recording['title'] .'" />
                </a>
            </div>
            <div class="col-5 col-md-8 recording-hero-text align-vertical align-center">
                <a class="link category" href="test.com" title="'. $recording['category'] .'">
                    '. $recording['category'] .'
                </a>
                <a href="'. $recording['url'] .'" title="'. $recording['title'] .'">
                    <h2>'. $recording['title'] .'</h2>
                </a>
                <a href="'. $recording['url'] .'" title="'. $recording['title'] .'">
                    <p class="paragraph styled">
                        '. $recording['description'] .'
                    </p>
                </a>
                '. post_meta($recording['author'], $recording['date']) .'
            </div>
        </div>
    ';
}
?>