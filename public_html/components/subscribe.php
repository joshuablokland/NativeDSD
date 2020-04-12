<?php 
function subscribe() {
    return '
        <div class="subscribe background-beige">
            <div class="subscribe-inner-row align-right collapse-md">
                <div class="subscribe-form-holder col-6 col-md-8">
                    <h2 class="mb-md-8">Subscribe to our newsletter</h2>
                    <p class="paragraph mb-32 mb-sm-8">
                        New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers.
                    </p>
                    <form class="subscribe-form">
                        <input class="input" type="text" placeholder="E-mail address"/>
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    ';
}
?>