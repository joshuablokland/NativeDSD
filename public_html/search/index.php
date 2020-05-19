<?php include $_SERVER['DOCUMENT_ROOT'] . '/lib/includes.php'; ?>

<?php echo nativedsd_header(); ?>

    <?php

    ?>

    <div class="search">
        <section class="container search-header py-96">
            <div class="row">
                <div class="col-8">
                    <h1 class="mb-48">
                        500 search results for: &quot;<?php echo $_GET["search"]; ?>&quot;
                    </h1>
                    <?php echo search_form(); ?>
                </div>
            </div>
            <div class="background background-beige"></div>
        </section>
    </div>

<?php echo nativedsd_footer(); ?>
