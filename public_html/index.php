<?php include $_SERVER['DOCUMENT_ROOT'] . '/lib/includes.php'; ?>

<?php echo nativedsd_header(); ?>

    <?php echo latest_articles(); ?>
    <?php echo news(); ?>
    <?php echo music_reviews(); ?>
    <?php echo recording_reports(); ?>
    <?php echo hardware_updates(); ?>
    
    <section class="container mb-128 mb-md-96 mb-sm-64">
        <div class="row">
            <div class="col-12">
                <?php echo subscribe(); ?>
            </div>
        </div>
    </section>
    
    <?php echo highlighted_articles(); ?>

<?php echo nativedsd_footer(); ?>
