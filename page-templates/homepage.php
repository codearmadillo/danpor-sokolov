<?php
    /*
    Template name: Homepage
    */
?>

<?php
    get_header();
?>

<div class="page__carousel">
  <div class="container">
    <h1 class="page__carousel-mainheadline">
      <?php echo get_field('header', $post->ID)["headline"]; ?>
    </h1>
    <h2 class="page__carousel-subheadline">
      <?php echo $post->post_content; ?>
    </h2>
    <?php
      foreach(get_field('header', $post->ID)["button_group"] as $button){
        $button = $button["button"];
        $class = ($button["style"] === "solid") ? 'btn-default btn--fill' :  'btn-default btn--outline';
        echo '<a href="'.$button["permalink"]["url"].'" title="'.$button["headline"].'" class="'.$class.' page__carousel-button">'.$button["headline"].'</a>';
      }
    ?>
  </div>
</div>
<div class="page__content">
  <div class="container">
    <div class="services-grid">
      <h2 class="services-header" style="text-align: center;">
      <?php echo get_field('services', $post->ID)["headline"]; ?>
      </h2>
      <p class="services-desc" style="text-align: center;">
      <?php echo get_field('services', $post->ID)["body"]; ?>
      </p>
      <?php
      $servicesPage = get_pages(array(
        'post_type'     =>'page',
        'meta_key'      =>'_wp_page_template',
        'hierarchical'  =>0,
        'meta_value'    => 'page-templates/services.php'
      ))[0];

      $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $servicesPage->ID,
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
          <article class="services-item services__card" style="position: relative;">
            <span class="services__card-icon"><img class="icon" alt="icon" src="'.CONST_TEMPLATEDIR.'/resources/icon.'.$meta["icon"].'.svg" /></span>
            <h2>'.$meta["headline"].'</h2>
            <p>'.$meta["desc"].'</p>
            <a href="'.$url.'" title="'.$meta["headline"].'" class="btn-default btn--fill services__card-button">Zobrazit více</a>
          </article>
          ';
        };
      };
      ?>
    </div>
  </div>
</div>

<?php
    get_footer();
?>  