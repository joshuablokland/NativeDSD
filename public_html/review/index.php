<?php include $_SERVER['DOCUMENT_ROOT'] . '/lib/includes.php'; ?>

<?php echo nativedsd_header(); ?>

    <?php
       
        $album = [
            "artist" => "Mandy Moore, Bradley Moore",
            "title" => "An American Song Album",
            "playlist" => [[
                "title" => "Vers la Lumière",
                "source" => get_audio_base_url('sample.mp3'),
                "type" => "audio/mpeg",
                "duration" => "00:04:35"
            ], [
                "title" => "Vers la Lumière",
                "source" => get_audio_base_url('sample.mp3'),
                "type" => "audio/mpeg",
                "duration" => "00:04:35"
            ], [
                "title" => "Vers la Lumière",
                "source" => get_audio_base_url('sample.mp3'),
                "type" => "audio/mpeg",
                "duration" => "00:04:35"
            ]],
            "featured_img" => get_image_base_url("dev-music-review-small.png")
        ];

        $album_promotion = [
            "artist" => "Mandy Moore, Bradley Moore",
            "title" => "An American Song Album",
            "url" => "http://localhost:8080",
            "featured_img" => get_image_base_url("dev-music-review-small.png")
        ];
    ?>

    <div class="article-single track-scroll-progress">
        <div class="track-scroll-progress-bar">
            <!-- Tracks scroll progress of .track-scroll-progress with JavaScript -->
        </div>

        <div class="container intro-review mt-92 mb-144 mt-md-64 mb-md-64 mt-sm-32 mb-sm-32">
            <div class="row collapse-md">
                <div class="col-6 col-md-8 intro-review-text">
                    <h1 class="styled">
                        An American Song Album
                    </h1>
                    <h3>Mandy Moore, Bradley Moore</h3>
                    <?php echo post_meta('Floor van der Holst', 'May 02, 2019'); ?>
                </div>
                <div class="col-5 col-md-8 intro-review-covers">
                    <?php for ($i = 0; $i < 4; $i++) : ?>
                        <img src="<?php echo get_image_base_url('dev-music-review-intro.png') ?>" />
                    <?php endfor; ?>
                </div>
            </div>
            <div class="background right background-beige"></div>
        </div>

        <div class="container mb-128 mb-md-96 mb-sm-64">
            <div class="row collapse-md">
                <div class="col-2 col-md-8 mb-md-32 mb-sm-24">
                    <div class="article-single-social">
                        <button class="btn-round btn-round-lg facebook">Facebook</button>
                        <button class="btn-round btn-round-lg twitter">Twitter</button>
                        <button class="btn-round btn-round-lg more">More</button>
                    </div>
                </div>
                <div class="article-single-content col-8 col-md-8">
                    <div class="article-single-content-inner">
                        <p class="paragraph styled">
                            This album is a fine collection of songs by American composers, <a href="http://localhost:8080/article" title="presented by soprano">presented by soprano</a> Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental Four Early Songs, as well as a varied selection from Gordon Getty’s vocal works.
                        </p>
                        <h2>An American Song Album</h2>
                        <p>
                            This album is a fine collection of songs by American composers, presented <a href="http://localhost:8080/article" title="presented by soprano">by soprano Melody Moore</a> and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental Four Early Songs, as well as a varied selection from Gordon Getty’s vocal works. Set to Irish, Welsh, Chilean, German, Arabic and Afro-American poetry, these pieces constitute a panorama of the US as a melting pot of cultures, while simultaneously being bound together by an unmistakably American sound.
                        </p>
                        <p>
                            Melody Moore manages to lift out the poetry of these works with her warm, lyrical voice and impeccable vocal technique. She is accompanied on the piano by Bradley Moore, one of the most eminent conductors and song accompanists of today’s American musical scene.​
                        </p>
                        <hr />
                        <?php echo album_promotion($album_promotion) ?>
                        <p>
                            This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental.
                        </p>
                        <hr />
                        <?php echo album_promotion($album_promotion) ?>
                        <p>
                            This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental.
                        </p>
                        <hr />
                        <?php echo album_promotion($album_promotion) ?>
                        <hr />
                        <?php echo album_promotion($album_promotion) ?>
                        <hr />
                        <h2>An American Song Album</h2>
                        <p>
                        This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental Four Early Songs, as well as a varied selection from Gordon Getty’s vocal works. Set to Irish, Welsh, Chilean, German, Arabic and Afro-American poetry, these pieces constitute a panorama of the US as a melting pot of cultures, while simultaneously being bound together by an unmistakably American sound.
                        </p>
                    </div><!-- end .article-single-content-inner -->
                    <?php echo tags(); ?>
                    <?php echo written_by(); ?>
                </div>
            </div>
        </div>
    </div>

<?php echo nativedsd_footer(); ?>
