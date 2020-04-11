<?php
include $_SERVER['DOCUMENT_ROOT'] . '/components/navigation.php';

function nativedsd_header () {
    return '
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>NativeDSD</title>
            <link rel="stylesheet" type="text/css" href="http://'. $_SERVER['HTTP_HOST'] . '/assets/css/main.css" />
        </head>
        <body>
            <div class="nativedsd-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="navbar">
                                <a href="/" title="NativeDSD" class="nativedsd-logo">NativeDSD</a>
                                '. navigation() .'
                                <div class="navbar-cta-holder">
                                    <button class="btn">Try for free</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    ';
}
?>