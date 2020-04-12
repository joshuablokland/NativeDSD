<?php

/**
 * article_small($article)
 * 
 * @param $article = [
 *   "category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function article_small($article) {
    return '
        <div class="article-small">
            <a class="link-wrapper" href="'. $article['url'] .'" title="'. $article['title'] .'">
                <img src="'. $article['featured_img'] .'" alt="'. $article['title'] .'"/>
            </a>
            <div class="article-small-text">
                <a class="link category" href="test.com" title="'. $article['category'] .'">
                    '. $article['category'] .'
                </a>
                <a href="'. $article['url'] .'" title="'. $article['title'] .'">
                    <h4>'. $article['title'] .'</h4>
                </a>
            </div>
        </div>
    ';
}

/**
 * article_medium($article)
 * 
 * @param $article = [
 *   "category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function article_medium($article) {
    return '
        <div class="article-medium">
            <a class="link-wrapper mb-24" href="'. $article['url'] .'" title="'. $article['title'] .'">
                <img src="'. $article['featured_img'] .'" alt="'. $article['title'] .'"/>
            </a>
            <div>
                <a class="link category" href="test.com" title="'. $article['category'] .'">
                    '. $article['category'] .'
                </a>
                <a href="'. $article['url'] .'" title="'. $article['title'] .'">
                    <h2>'. $article['title'] .'</h2>
                </a>
                '. post_meta($article['author'], $article["date"]) .'
            </div>
        </div>
    ';
}

/**
 * article_large($article)
 * 
 * @param $article = [
 *   "category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
 *   "author" => "Floor van der Holst",
 *   "date" => "May 02, 2019",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function article_large($article) {
    return '
        <div class="article-large">
            <a class="link-wrapper mb-24" href="'. $article['url'] .'" title="'. $article['title'] .'">
                <img src="'.$article['featured_img'].'" alt="'. $article['title'] .'"/>
            </a>
            <div>
                <a class="link category" href="test.com" title="'. $article['category'] .'">
                    '. $article['category'] .'
                </a>
                <a href="'. $article['url'] .'" title="'. $article['title'] .'">
                    <h2>'. $article['title'] .'</h2>
                </a>
                <a class="description" href="'. $article['url'] .'" title="'. $article['title'] .'">
                    <p class="paragraph styled">'. $article['description'] .'</p>
                </a>
                '. post_meta($article['author'], $article["date"]) .'
            </div>
        </div>
    ';
}

?>