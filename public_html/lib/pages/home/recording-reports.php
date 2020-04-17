<?php
function recording_reports() {
    $recording_hero = [
        "category" => "Recording Report",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-recording-reports-hero.png")
    ];

    $recording_reports = [[
        "category" => "Recording Report",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-recording-reports-small.png")
    ], [
        "category" => "Recording Report",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-recording-reports-small.png")
    ]];

    $html_recording_reports = '';
    foreach($recording_reports as $recording) {
        $html_recording_reports .= '<div class="col-6 col-md-8">'. recording_small($recording) .'</div>';
    }

    return '
        <section class="container recording-reports background-dark-grey py-128 pt-sm-64">
            '. section_title('Recording Reports', true, ['mb-48', 'mb-sm-40']) .'
            '. recording_hero($recording_hero) .'
            <div class="row recording-reports-list collapse-md">
                '.  $html_recording_reports .'
            </div>
            <div class="row mt-64 mobile-hidden">
                <div class="col-12 align-right">
                    <a class="link arrow-after" href="http://localhost:8080" title="View more">View more</a>
                </div>
            </div>
        </section>
    ';
}
?>