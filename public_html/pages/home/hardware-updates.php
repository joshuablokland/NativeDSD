<?php
function hardware_updates() {
    $hardware_hero = [
        "category" => "Hardware Updates",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-recording-reports-hero-hardware.png")
    ];

    return '
        <div class="container py-128">
            <div class="mb-48">
                '. section_title('Hardware Updates', true) .'
            </div>
            '. recording_hero($hardware_hero) .'
        </div>
    ';
}
?>