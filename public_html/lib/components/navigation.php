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
                    '.search_form().'
                </div>
            </div>
        </div>
    ';
}
?>