<?php
/**
 * hardware_update_hero
 * 
 * @param $hardware_update_hero = [
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

function hardware_update_hero($hardware_update_hero, $align_image_right = true) {
    $classes = [];

    if ($align_image_right == true) {
        array_push($classes, 'align-image-right');
    }

    return '
        <div class="row hardware-update-hero collapse-md '. implode(' ', $classes) .'">
            <div class="col-7 col-md-8 hardware-update-hero-image">
                <a class="link-wrapper" href="'. $hardware_update_hero['url'] .'" title="'. $hardware_update_hero['title'] .'">
                    <img src="'. $hardware_update_hero['featured_img'] .'" alt="'. $hardware_update_hero['title'] .'" />
                </a>
            </div>
            <div class="col-5 col-md-8 hardware-update-hero-text align-vertical align-center">
                <a class="link category" href="test.com" title="'. $hardware_update_hero['category'] .'">
                    '. $hardware_update_hero['category'] .'
                </a>
                <a href="'. $hardware_update_hero['url'] .'" title="'. $hardware_update_hero['title'] .'">
                    <h1>'. $hardware_update_hero['title'] .'</h1>
                </a>
                <a href="'. $hardware_update_hero['url'] .'" title="'. $hardware_update_hero['title'] .'">
                    <p class="paragraph styled">
                        '. $hardware_update_hero['description'] .'
                    </p>
                </a>
                '. post_meta($hardware_update_hero['author'], $hardware_update_hero['date']) .'
                <a class="link arrow-after" href="http://localhost:8080" title="View more">View more</a>
            </div>
        </div>
    ';
}
?>