<?php

function highlighted_articles() {
    $articles = [[
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, present...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-medium.png")
    ], [
        "category" => "Music Reviews",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, present...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-medium.png")
    ], [
        "category" => "Recording Reports",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, present...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-medium.png")
    ]];

    $html_articles = '';
    foreach($articles as $article) {
        $html_articles .= '<div class="highlighted-article-wrapper col-4 col-md-4 col-sm-4">'. article_medium($article) .'</div>';
    }

    return '
        <div class="container highlighted-articles mb-128 mb-md-96 mb-sm-64">
            <div class="row collapse-sm">
                '. $html_articles .'
            </div>
        </div>
    ';
}
?>