<?php
function navigation() {
    $navigation_items = [[
        'title' => 'News',
        'link' => 'http://localhost:8080'
    ], [
        'title' => 'Music Reviews',
        'link' => 'http://localhost:8080'
    ], [
        'title' => 'Recording Reports',
        'link' => 'http://localhost:8080'
    ], [
        'title' => 'Hardware Updates',
        'link' => 'http://localhost:8080'
    ]];
    
    $html_links = '';
    foreach($navigation_items as $item) {
        $html_links .= '<li><a href="'. $item["link"] .'" title="'. $item["title"] .'">'. $item["title"] .'</a></li>';
    }

    return '
        <div id="nativedsd-navigation" class="navigation">
            <div class="navigation-scroll">
                <div class="navigation-scroll-inner">
                    <ul>
                        '. $html_links .'
                    </ul>
                    '.search().'
                </div>
            </div>
        </div>
    ';
}

function search() {
    return '
        <form class="search">
            <button type="submit" class="search-icon-open"></button>
            <input class="input input-sm" type="text" name="search" placeholder="What are you looking for?" />
            <button class="search-icon-close"></button>
        </form>
    ';
}
?>