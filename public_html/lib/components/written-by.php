<?php 
    function written_by() {
        return '
            <div class="article-single-written-by">
                <h3>Written by</h3>
                <div class="article-single-written-by-author">
                    <figure class="avatar">
                        <img src="'. get_image_base_url('dev-kate.png') .'" />
                    </figure>
                    <div>
                        <div class="name">Floor van der Holst</div>
                        <div class="function">Marketing & Label Manager</div>
                    </div>
                </div>
            </div>
        ';
    }
?>