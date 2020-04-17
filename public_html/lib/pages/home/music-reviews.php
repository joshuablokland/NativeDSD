<?php
function music_reviews() {
    $review_large = [
        "title" => "An American Song Album",
        "artist" => "Mandy Moore, Bradley Moore",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-music-review-large.png")
    ];
    $review = [
        "title" => "An American Song Album",
        "artist" => "Mandy Moore, Bradley Moore",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-music-review-small.png")
    ];

    $html_small_reviews = '';
    for ($i = 0; $i < 3; $i++) {
        $html_small_reviews .= '<div class="spacer-border">'. music_review_small($review) .'</div>';
    }
    
    return '
        <section class="container music-reviews highlight-right mb-128 mb-md-64 mb-sm-16">
            '. section_title('Music reviews', true, ['mb-48', 'mb-md-128']) .'
            <div class="row collapse-md">
                <div class="col-6 col-md-8 music-reviews-list">
                    <div>
                        '. $html_small_reviews .'
                    </div>
                    <div class="align-right mt-8 tablet-hidden">
                        <a class="link arrow-after" href="http://localhost:8080" title="View more">View more</a>
                    </div>
                </div>
                <div class="col-5 col-md-8 music-reviews-highlight mb-md-48 mb-sm-48">
                    '. music_review_large($review_large) .'
                </div>
            </div>
            <div class="background right background-beige"></div>
        </section>
    ';
}
?>