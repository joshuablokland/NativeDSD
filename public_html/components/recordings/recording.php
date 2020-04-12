<?php
/**
 * recording_small()
 * 
 * @param $recording_small = [
        "category" => "Recording Report",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-recording-reports-hero.png")
    ]
 */
function recording_small($recording) {
    return '
        <div class="recording-small">
            <a class="link-wrapper" href="'. $recording['url'] .'" title="'. $recording['title'] .'">
                <img src="'. $recording['featured_img'] .'" alt="'. $recording['title'] .'" />
            </a>
            <div class="recording-small-text align-vertical align-center">
                <a class="link category" href="test.com" title="'. $recording['category'] .'">
                    '. $recording['category'] .'
                </a>
                <a href="'. $recording['url'] .'" title="'. $recording['title'] .'">
                    <h3>'. $recording['title'] .'</h3>
                </a>
            </div>
        </div>
    ';
}
?>