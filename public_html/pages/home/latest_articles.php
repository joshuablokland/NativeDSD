<?php

function latest_articles() {
    $main_article = [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-hero.png")
    ];

    $articles = [[
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-small.png")
    ], [
        "category" => "Music Reviews",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-small.png")
    ], [
        "category" => "Recording Reports",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-small.png")
    ], [
        "category" => "Hardware Updates",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080",
        "featured_img" => get_image_base_url("dev-article-small.png")
    ]];

    $html_articles = '';
    foreach($articles as $article) {
        $html_articles .= '<div class="spacer-border">'. article_small($article) .'</div>';
    }

    return '
        <div class="container latest-articles py-128 py-md-48 py-sm-32">
            <div class="row collapse-md">
                <div class="col-8 col-md-8">
                    '.article_hero($main_article).'
                </div>
                <div class="col-4 col-md-8 pt-md-64 pt-sm-48">
                    <h2>Latest articles</h2>
                    <div class="latest-articles-wrapper">
                        '. $html_articles .'
                    </div>
                </div>
            </div>
        </div>
    ';
}
?>