<?php
    /*
    Template name: Contact
    */
?>
<?php
    get_header();

    require_once(get_template_directory()."/breadcrumbs.php");
?>

<div class="page__content">
    <div class="container">
        <div class="row">
            <aside class="col-xs-12 col-md-4">
                <?php
                    get_sidebar('pages');
                ?>
            </aside>
            <section class="col-xs-12 col-md-8">
                <h1><?php echo $post->post_title; ?></h1>
                <p><?php echo $post->post_content; ?></p>
                <?php
                echo do_shortcode('[contact-form-7 id="1604" title="Kontaktní formulář 1"]');
                ?>
            </section>
        </div>
    </div>
</div>

<?php
    get_footer();
?>  