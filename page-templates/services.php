<?php
    /*
    Template name:  Services
    */
?>

<?php
    get_header();

    require_once(get_template_directory()."/breadcrumbs.php");
?>

<div class="page__content">
  <div class="container page-main-content">
    <section class="page-main page-main--full services-grid">
      <h1 class="services-header-single" style="text-align: center;">
        <?php echo $post->post_title; ?>
      </h1>
      <p class="services-desc" style="text-align: center;">
        <?php echo $post->post_content; ?>
      </p>
      <?php
        $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
        );

        $query = new WP_Query($args);
        if($query->have_posts()){
          while($query->have_posts()){
            $query->the_post();
            $url = get_permalink($post->ID);
            $meta = get_field('snippet');
            echo '
              <div class="services-item services__card" style="position: relative;">
                <span class="services__card-icon"><img class="icon" alt="icon" src="'.CONST_TEMPLATEDIR.'/resources/icon.'.$meta["icon"].'.svg" /></span>
                <h2>'.$meta["headline"].'</h2>
                <p>'.$meta["desc"].'</p>
                <a href="'.$url.'" title="'.$meta["headline"].'" class="btn-default btn--fill services__card-button">Zobrazit více</a>
              </div>
            ';
          };
        };
      ?>
    </section>
  </div>
</div>

<?php
    get_footer();
?>  