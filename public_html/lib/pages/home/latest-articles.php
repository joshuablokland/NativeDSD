<?php

function latest_articles() {
    $main_article = [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
        "author" => "Floor van der Holst",
        "date" => "May 02, 2019",
        "url" => "http://localhost:8080/article",
        "featured_img" => get_image_base_url("dev-hero.png")
    ];

    $article = [
        "category" => "News",
        "title" => "Melody Moore, Artist in the Spotlight",
        "url" => "http://localhost:8080/article",
        "featured_img" => get_image_base_url("dev-article-small.png")
    ];

    $html_articles = '';
    for ($i = 0; $i < 4; $i++) {
        $html_articles .= '<div class="spacer-border">'. article_small($article) .'</div>';
    }

    return '
        <section class="container latest-articles mt-128 mt-md-48 mt-sm-32 mb-176 mb-md-144 mb-sm-64">
            <div class="row collapse-md">
                <div class="col-8 col-md-8">
                    '.article_hero($main_article).'
                    <div class="background right background-beige show-tablet"></div>
                </div>
                <div class="col-4 col-md-8 pt-md-64 pt-sm-48">
                    <h2>Latest articles</h2>
                    <div class="latest-articles-wrapper">
                        '. $html_articles .'
                    </div>
                </div>
            </div>
            <div class="background right background-beige hide-tablet"></div>
        </section>
    ';
}
?>