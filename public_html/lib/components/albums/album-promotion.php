<?php
/**
 * $article = [
 *   "artist" => "Mandy Moore, Bradley Moore",
 *   "title" => "An American Song Album",
 *   "url" => "http://localhost:8080",
 *   "featured_img" => get_image_base_url("dev-hero.png")
 * ];
 */
function album_promotion($album) {
    return '
        <div class="album-promotion mb-32">
            <a class="link-wrapper" href="'. $album['url'] .'" title="'. $album['title'] .'">
                <img src="'.$album['featured_img'].'" alt="'. $album['title'] .'"/>
            </a>
            <div class="album-promotion-text">
                <a href="'. $album['url'] .'" title="'. $album['artist'] .'">
                    <p class="paragraph">'. $album['artist'] .'</p>
                </a>
                <a href="'. $album['url'] .'" title="'. $album['title'] .'">
                    <h2>'. $album['title'] .'</h2>
                </a>
                <a href="'. $album['url'] .'" title="Buy '. $album['title'] .'" class="btn btn-sm">
                    <span class="icon bag"></span>Buy the album
                </a>
            </div>
        </div>
    ';
}
?>