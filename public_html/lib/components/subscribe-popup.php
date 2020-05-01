<?php
function subscribe_popup() {
    return '
    <div id="nativedsd-subscribe-popup" class="subscribe-popup">
        <button type="button" class="btn-close-subscribe">Close</button>
        <h3 class="styled">Subscribe to our newsletter</h3>
        <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vulputate, urna vestibulum pretium sollicitudin, diam enim.
        </p>
        <form class="subscribe-form">
            <input class="input input-white" type="text" placeholder="E-mail address"/>
            <button type="submit" class="btn btn-white">Subscribe</button>
        </form>
    </div>
    ';
}
?>