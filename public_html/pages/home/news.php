<?php
function news() {
    $html_articles_large = '';
    $articles_large = [[
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-large.png")
    ], [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-large.png")
    ]];
    
    foreach($articles_large as $article) {
        $html_articles_large .= article_large($article);
    }
    
    $html_articles_medium = '';
    $articles_medium = [[
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-medium.png")
    ], [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-medium.png")
    ], [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-medium.png")
    ]];
    foreach($articles_medium as $article) {
        $html_articles_medium .= article_medium($article);
    }

    return '
        <div class="container news pb-128 pb-md-96 pb-sm-32">
            <div class="row">
                <div class="col-12 mb-32">
                    <h1 class="with-link styled">News <a class="link arrow mobile-hidden" href="test.com">View more</a></h1>
                </div>
            </div>
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
                    <a class="link arrow" href="test.com">View more</a>
                </div>
            </div>
        </div>
    ';
}
?>