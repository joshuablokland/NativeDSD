<?php
function nativedsd_footer() {
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

    $social_items = [[
        'title' => 'Facebook',
        'link' => 'http://localhost:8080'
    ], [
        'title' => 'Twitter',
        'link' => 'http://localhost:8080'
    ], [
        'title' => 'LinkedIn',
        'link' => 'http://localhost:8080'
    ], [
        'title' => 'Youtube',
        'link' => 'http://localhost:8080'
    ]];


    return '
            <footer class="nativedsd-footer">
                <section class="container">
                    <div class="row collapse-md">
                        <div class="intro col-6 col-md-8">
                            <h1 class="heading styled">
                                Join the quality 
                                music platform
                            </h1>
                            <p class="paragraph styled">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum at lectus tempor facilisis.
                            </p>
                            <a href="http://localhost:8080" class="btn btn-white">Try for free</a>
                        </div>
                    </div>
                    <div class="row collapse-md">
                        <div class="nativedsd-footer-navigation-menu col-6 col-md-8">
                            <ul>
                                '. menu_items($navigation_items) .'
                            </ul>
                        </div>
                        <div class="nativedsd-footer-social-menu col-6 col-md-8">
                            <ul>
                                '. menu_items($social_items) .'
                            </ul>
                        </div>
                    </div>
                </section>
            </footer>
            </div>
            <script src="http://'. $_SERVER['HTTP_HOST'] . '/assets/js/main-min.js"></script>
        </body>
    </html>
    ';
}
?>