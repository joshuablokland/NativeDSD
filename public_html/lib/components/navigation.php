<?php
function navigation() {
    $navigation_items = [[  
        'title' => 'News',
        'link' => '/news/'
    ], [
        'title' => 'Music Reviews',
        'link' => '/music-reviews/'
    ], [
        'title' => 'Recording Reports',
        'link' => '/recording-reports/'
    ], [
        'title' => 'Hardware Updates',
        'link' => '/hardware-updates/'
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
        <form class="search-form">
            <button type="submit" class="search-icon-open"></button>
            <input class="input input-sm" type="text" name="search" placeholder="What are you looking for?" />
            <button class="search-icon-close"></button>
        </form>
    ';
}
?>