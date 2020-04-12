<?php

/**
 * section_title()
 * 
 * @param $title string
 * @param $styled boolean
 * @param $link ['text' => string, 'url' => string]
 */
function section_title($title, $styled = false, $link = null) {
    $html_link = '';
    $classes = [];

    if ($styled == true) {
        array_push($classes, 'styled');
    }

    if ($link != null) {
        $html_link .= ' <a class="link arrow mobile-hidden" href="'. $link['url'] .'">'. $link['text'] .'</a>';
        array_push($classes, 'with-link');
    }

    return '
        <div class="row">
            <div class="col-12 mb-32">
                <h1 class="'. implode(' ', $classes) .'">'. $title . $html_link .'</h1>
            </div>
        </div>
    ';
}
?>