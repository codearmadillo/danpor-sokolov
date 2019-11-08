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
      <aside class="page-sidebar">
        <?php
          get_sidebar('pages');
        ?>
      </aside>
      <section class="page-main">
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
                <div class="services__card col-xs-12 col-sm-6 col-md-4 col-lg-3" style="position: relative;">
                  <span class="services__card-icon"><i class="fas '.$meta["icon"].' fa-2x"></i></span>
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