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
        $active = ($item["link"] == $_SERVER["REQUEST_URI"]) ? 'current-menu-item' : '';

        $html .= '<li class="'. $active .'"><a href="http://localhost:8080'. $item["link"] .'" title="'. $item["title"] .'">'. $item["title"] .'</a></li>';
    }

    return $html;
}
?>