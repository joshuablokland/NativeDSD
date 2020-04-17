<?php

function page_intro($intro) {
    return '
        <div class="intro row collapse-md mt-128 mt-md-64 mt-sm-48 mb-64 mb-md-48 mb-sm-32">
            <div class="col-8 col-md-8">
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