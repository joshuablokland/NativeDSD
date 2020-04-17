<?php

/**
 * menu_items($arr)
 * 
 * $navigation_items = [[
        'title' => 'News',
        'link' => 'http://localhost:8080'
    ], ...];
 */
function menu_items($menu_items) {
    $html = '';
    foreach($menu_items as $item) {
        $html .= '<li><a href="'. $item["link"] .'" title="'. $item["title"] .'">'. $item["title"] .'</a></li>';
    }

    return $html;
}
?>