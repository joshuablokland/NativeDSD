<?php
function search_form() {
    return '
        <form class="search-form" action="/search">
            <button type="submit" class="search-icon-open"></button>
            <input class="input input-sm" type="text" name="search" placeholder="What are you looking for?" value="'. $_GET["search"] .'"/>
            <button class="search-icon-close"></button>
        </form>
    ';
}
?>