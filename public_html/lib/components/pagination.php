<?php

function pagination() {
    $url = "http://localhost:8080" . $_SERVER["REQUEST_URI"];
    return '
        <div class="container pagination">
            <div class="row">
                <div class="col-12 mb-64 mb-md-48 mb-sm-32">
                    <a href="'. $url .'" title="Previous" class="link arrow-before">Previous</a> Page 1 of 25 <a href="'. $url .'" title="Next" class="link arrow-after">Next</a>    
                </div>
            </div>
        </div>
    ';
}
?>