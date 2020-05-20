<?php
function author($auhtor) {
    return '
        <div class="author">
            <figure class="avatar">
                <a href="http://localhost:8080/">
                    <img src="'. get_image_base_url('dev-kate.png') .'" />
                </a>
            </figure>
            <div>
                <a href="http://localhost:8080/" class="name">'. $auhtor['name'] .'</a>
                <a href="http://localhost:8080/" class="function">'. $auhtor['function'] .'</a>
            </div>
        </div>
    ';
}
?>