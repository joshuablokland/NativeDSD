<?php

/**
 * post_meta()
 * 
 * @param $author string
 * @param $date string
 */
function post_meta($author, $date) {
    return '
        <p class="post-meta">
            <a class="link author" href="test.com" title="'. $author .'">'. $author .'</a> on '. $date .'
        </p>
    ';
}

?>