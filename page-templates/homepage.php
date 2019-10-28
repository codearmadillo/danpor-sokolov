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
        <div class="row">
            <div class="col-xs-12">
                <h2 style="text-align: center;">
                <?php echo get_field('services', $post->ID)["headline"]; ?>
                </h2>
                <p style="text-align: center;">
                <?php echo get_field('services', $post->ID)["body"]; ?>
                </p>
            </div>
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
        </div>
    </div>
</div>

<?php
    get_footer();
?>  