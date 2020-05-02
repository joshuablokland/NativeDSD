<?php
function get_image_base_url($image) {
    return 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/' . $image;
}

function get_audio_base_url($file) {
    return 'http://' . $_SERVER['HTTP_HOST'] . '/assets/audio/' . $file;
}
?>