<?php
function news() {
    $html_articles_large = '';
    $html_articles_medium = '';
    $article_large = [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-large.png")
    ];
    $article_medium = [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-medium.png")
    ];
    
    for ($i = 0; $i < 2; $i++) {
        $html_articles_large .= article_large($article_large);
    }
    
    for ($i = 0; $i < 4; $i++) {
        $html_articles_medium .= article_medium($article_medium);
    }

    return '
        <section class="container news mb-128 mb-md-96 mb-sm-64">
            '. section_title('News', true, ['mb-48 mb-sm-24'], ['text' => 'View more', 'url' => 'test.com']) .'
            <div class="row collapse-sm">
                <div class="col-7 col-md-5 col-sm-4">
                    '. $html_articles_large .'
                </div>
                <div class="col-5 col-md-3 col-sm-4">
                    '. $html_articles_medium .'
                </div>
            </div>
            <div class="row pt-32 mobile-visible">
                <div class="col-sm-4">
                    <a class="link arrow-after" href="test.com">View more</a>
                </div>
            </div>
            <div class="background left background-beige"></div>
        </section>
    ';
}
?>