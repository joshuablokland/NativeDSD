<?php include $_SERVER['DOCUMENT_ROOT'] . '/lib/includes.php'; ?>

<?php echo nativedsd_header(); ?>

    <?php
        $intro = [
            "category" => "News",
            "title" => "This is the artist in the Spotlight",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
        ];

        $hero_article = [
            "category" => "News",
            "title" => "Melody Moore, Artist in the Spotlight",
            "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080",
            "featured_img" => get_image_base_url("dev-hero.png")
        ];

        $article = [
            "category" => "News",
            "title" => "Melody Moore, Artist in the Spotlight",
            "description" => "New DSD Release! “An American Song Album” This album is a fine collection of songs by American composers, presented...",
            "author" => "Floor van der Holst",
            "date" => "May 02, 2019",
            "url" => "http://localhost:8080",
            "featured_img" => get_image_base_url("dev-article-medium.png")
        ];

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

        <div class="container mb-16 mb-md-0 mb-sm-0">
            <?php echo page_intro($intro); ?>
        </div>

        <div class="container mb-80 mb-md-32 mb-sm-24">
            <div class="row">
                <div class="col-12">
                    <img src="<?php echo get_image_base_url("dev-article-featured-image.png"); ?>"/>
                </div>
            </div>
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
                        <?php echo music_player($album); ?>
                        <p>
                            This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and <a href="http://test.com" title="How Well I Knew the Light">How Well I Knew the Light</a>, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental Four Early Songs, as well as a varied selection from Gordon Getty’s vocal works. Set to Irish, Welsh, Chilean, German, Arabic and Afro-American poetry, these pieces constitute a panorama of the US as a melting pot of cultures, while simultaneously being bound together by an unmistakably American sound.
                        </p>
                        <hr />
                        <p>
                            This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental.
                        </p>
                        <blockquote class="wp-block-quote">
                            <p>Sometimes I will click on a random sequence of notes- not to actually use it in a song, but to see if I can find maybe a simple pattern that I can build off of</p>
                            <cite>Melody Moore</cite>
                        </blockquote>
                        <p>
                            This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental Four Early Songs, as well as a varied selection from Gordon Getty’s vocal works.
                        </p>
                        <figure class="wp-block-gallery columns-2 is-cropped">
                            <ul class="blocks-gallery-grid">
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="<?php echo get_image_base_url("dev-gallery-image.png"); ?>" alt="" data-id="7" class="wp-image-7">
                                    </figure>
                                </li>
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="<?php echo get_image_base_url("dev-gallery-image-2.png"); ?>" alt="" data-id="8" class="wp-image-8">
                                    </figure>
                                </li>
                            </ul>
                            <figcaption class="blocks-gallery-caption">Photos by Gregory Pappas on Unsplash</figcaption>
                        </figure>
                        <h2>Alinea</h2>
                        <p>
                            This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore. The repertoire includes Samuel Barber’s introspective Hermit Songs, Jake Heggie’s engaged cycles These Strangers and How Well I Knew the Light, Carlisle Floyd’s exploration of motherhood in The Mystery, Copland’s impressionist and oriental Four Early Songs, as well as a varied selection from Gordon Getty’s vocal works. Set to Irish, Welsh, Chilean, German, Arabic and Afro-American poetry, these pieces constitute a panorama of the US as a melting pot of cultures, while simultaneously being bound together by an unmistakably American sound.
                        </p>
                        <h2>Ordered List</h2>
                        <ol>
                            <li>This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore.</li>
                            <li>This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore.</li>
                            <li>This album is a fine collection of songs by American composers.</li>
                            <li>This album is a fine collection of songs by American composers.</li>
                        </ol>
                        <h2>Unordered List</h2>
                        <ul>
                            <li>This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore.</li>
                            <li>This album is a fine collection of songs by American composers, presented by soprano Melody Moore and pianist Bradley Moore.</li>
                            <li>This album is a fine collection of songs by American composers.</li>
                            <li>This album is a fine collection of songs by American composers.</li>
                        </ul>
                        <?php echo album_promotion($album_promotion) ?>
                    </div><!-- end .article-single-content-inner -->
                    <?php echo tags(); ?>
                    <?php echo written_by(); ?>
                </div>
            </div>
        </div>
    </div>

    <section class="container highlighted-articles mb-128 mb-md-96 mb-sm-64">
        <div class="row mb-48 mb-md-16 mb-sm-16">
            <div class="col-12">
                <h1>You may also like</h1>
            </div>
        </div>
        <div class="row collapse-sm">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="highlighted-article-wrapper mobile-full-width col-4 col-md-4 col-sm-4">
                    <?php echo article_medium($article); ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

<?php echo nativedsd_footer(); ?>
