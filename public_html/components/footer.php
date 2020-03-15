<?php
function nativedsd_footer($customClasses = '') {
    return '
            <script src="http://'. $_SERVER['HTTP_HOST'] . '/assets/js/main-min.js"></script>
        </body>
    </html>
    ';
}
?>