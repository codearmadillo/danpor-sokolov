<?php
    get_header();

    require_once(get_template_directory()."/breadcrumbs.php");
?>

<div class="page__content">
  <div class="container page-main-content">
    <aside class="page-sidebar">
        <?php
            get_sidebar('pages');
        ?>
    </aside>
    <section class="page-main">
        <h1><?php echo $post->post_title; ?></h1>
        <p><?php echo $post->post_content; ?></p>
    </section>
  </div>
</div>

<?php
    get_footer();
?>  