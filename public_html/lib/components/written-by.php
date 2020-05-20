<?php 
    function written_by() {
        return '
            <div class="article-single-written-by">
                <h3>Written by</h3>
                '. author(['name' => 'Floor van der Holst', 'function' => 'Marketing & Label Manager']) .'
            </div>
        ';
    }
?>