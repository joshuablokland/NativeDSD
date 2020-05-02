<?php
/**
 * $album = [
            "artist" => "Mandy Moore, Bradley Moore",
            "title" => "An American Song Album",
            "playlist" => [[
                "title" => "Vers la Lumière",
                "duration" => "00:04:35"
            ], [
                "title" => "Vers la Lumière",
                "duration" => "00:04:35"
            ], [
                "title" => "Vers la Lumière",
                "duration" => "00:04:35"
            ]],
            "featured_img" => get_image_base_url("dev-music-review-small.png")
        ];
 */
function music_player($album) {
    $playlist = '<div class="mb-40 mb-md-32 mb-sm-24">';
    $count = 1;
    foreach($album['playlist'] as $song) {
        $playlist .= '
        <div class="nativedsd-player" data-source="'. $song['source'] .'">
            <div class="nativedsd-player-controls">
                <button class="btn-play show">Play</button>
                <button class="btn-pause">Pause</button>
                <svg viewbox="0 0 48 48" class="nativedsd-player-progress" width="48" height="48">
                    <circle cx="24" cy="24" r="24" fill="none"/>
                    <path class="nativedsd-player-border-path" fill="none" stroke-width="4" stroke="#E8E6E4"
                        stroke-dasharray="138,138"
                        d="M24 2
                        a 20 20 0 0 1 0 44
                        a 20 20 0 0 1 0 -44"
                    />
                    <circle cx="24" cy="24" r="24" fill="none"/>
                    <path class="nativedsd-player-progress-path" fill="none" stroke-width="4" stroke="#F39C12"
                        stroke-dasharray="0,138"
                        d="M24 2
                        a 20 20 0 0 1 0 44
                        a 20 20 0 0 1 0 -44"
                    />
                </svg>
            </div>
            <div class="nativedsd-player-number">'. $count .'.</div>
            <div class="nativedsd-player-title">'. $song['title'] .'</div>
            <div class="nativedsd-player-duration"></div>
        </div>
        ';

        $count++;
    }
    $playlist .= '</div>';

    return '
    <div class="music-player mb-80">
        <div class="music-player-album-cover mr-32">
            <img src="'. $album['featured_img'] .'" alt="'. $album['title'] .'" />
            <div class="background left background-beige"></div>
        </div>
        <div class="music-player-album-songs">
            <div class="music-player-artist">'. $album['artist'] .'</div>
            <h2 class="mb-32 mb-md-24 mb-sm-24">'. $album['title'] .'</h2>
            <div class="music-player-list-title mb-32 mb-md-24 mb-sm-16">Top Songs</div>
            '. $playlist .'
            <button class="btn btn-sm"><span class="icon bag"></span>Buy the album</button>
        </div>
    </div>
    ';
}
?>