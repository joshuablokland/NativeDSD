<?php
/**
 * $article = [
 *   "category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
 *   "author" => "Floor van der Holst",
 *   "date" => "May 02, 2019",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function article_hero($article) {
    return '
        <div class="article-hero">
            <a class="link-wrapper" href="'. $article['url'] .'" title="'. $article['title'] .'">
                <img src="'.$article['featured_img'].'" alt="'. $article['title'] .'"/>
            </a>
            <div class="article-hero-text">
                <a class="link category" href="test.com" title="'. $article['category'] .'">
                    '. $article['category'] .'
                </a>
                <a href="'. $article['url'] .'" title="'. $article['title'] .'">
                    <h1>'. $article['title'] .'</h1>
                </a>
                <a href="'. $article['url'] .'" title="'. $article['title'] .'">
                    <p class="paragraph styled">'. $article['description'] .'</p>
                </a>
                <p class="post-meta">
                    <a class="link author" href="test.com" title="'. $article['author'] .'">'. $article['author'] .'</a> on '. $article["date"] .'
                </p>
            </div>
        </div>
    ';
}
?>