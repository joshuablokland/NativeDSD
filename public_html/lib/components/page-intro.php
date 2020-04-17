<?php
/**
 * page_intro($arr)
 * @param $article = [
 *   (optional)"category" => "News",
 *   "title" => "Melody Moore, Artist in the Spotlight",
 *   "description" => "Melody Moore, Artist in the Spotlight",
 */
function page_intro($intro) {
    $category = ($intro['category']) ? '<a href="http://localhost:8080/news" title="'. $intro['category'] .'">'. $intro['category'] .'</a>' : '';

    return '
        <div class="intro row collapse-md mt-128 mt-md-64 mt-sm-48 mb-64 mb-md-48 mb-sm-32">
            <div class="col-8 col-md-8">
                '. $category .'
                <h1 class="styled">
                    '. $intro['title'] .'
                </h1>
                <p class="paragraph styled">
                    '. $intro['text'] .'
                </p>
            </div>
        </div>
    ';
}
?>