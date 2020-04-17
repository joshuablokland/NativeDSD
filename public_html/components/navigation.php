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

    return '
        <div id="nativedsd-navigation" class="navigation">
            <div class="navigation-scroll">
                <div class="navigation-scroll-inner">
                    <ul>
                        '. menu_items($navigation_items) .'
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