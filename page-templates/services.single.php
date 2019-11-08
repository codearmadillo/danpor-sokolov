<?php
    /*
    Template name: Single service
    */
?>
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
      <ul class="services__checklist">
        <?php
          foreach(get_field('checklist', $post->ID) as $row){
            echo '<li>'.$row["body"].'</li>';
          }
        ?>
      </ul>
      <p><?php echo $post->post_content; ?></p>
    </section>
  </div>
</div>

<?php
    get_footer();
?>  