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
    ?>

    <div class="article-single">
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

        <div class="container">
            <div class="row collapse-md">
                <div class="col-2 col-md-8 mb-md-32 mb-sm-24">
                    <div class="article-single-social">
                        <button class="btn-round btn-round-lg facebook">Facebook</button>
                        <button class="btn-round btn-round-lg twitter">Twitter</button>
                        <button class="btn-round btn-round-lg more">More</button>
                    </div>
                </div>
                <div class="article-single-content col-8 col-md-8">
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
                </div>
            </div>
        </div>
    </div>


<?php echo nativedsd_footer(); ?>
