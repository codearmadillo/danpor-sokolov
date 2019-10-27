<?php
    /*
    Template name: Sitemaps
    */
?>

<?php
    get_header();

    require_once(get_template_directory()."/breadcrumbs.php");
?>

<div class="page__content">
    <div class="container">
        <div class="row">
            <section class="col-xs-12">
                <h1>Mapa webu</h1>
                <?php
                $args = array(
                    "post_type"         => "page",
                    "posts_per_page"    => -1,
                    "post_status"       => "publish",
                    "orderby"           => "ID",
                    "order"             => "ASC",
                    "post_parent"       => 0

                );
                $query = new WP_Query($args);
                if($query->have_posts()){
                    echo '<ul class="sitemap__list">';
                    while($query->have_posts()){
                        $query->the_post();
                        $title  = get_the_title();
                        $url    = get_the_permalink();
                        $id     = get_the_ID();
                        echo '<li><a href="'.$url.'" title="'.$title.'">'.$title.'</a>';
                        if(hasChildren($id)){
                            echo '<ul class="sitemap__list-children">';
                            $subQuery = get_posts(array(
                                'posts_per_page' => -1,
                                "post_type"      => "page",
                                "post_status"    => "publish",
                                "post_parent"    => $id
                            ));
                            foreach($subQuery as $post){
                                $url = get_permalink($post->ID);
                                echo '<li><a href="'.$url.'" title="'.$post->post_title.'">'.$post->post_title.'</a></li>';
                            }
                            echo '</ul>';
                        }
                        
                        echo '</li>';
                    }
                    echo '</ul>';
                }
                ?>
            </section>
        </div>
    </div>
</div>

<?php
    get_footer();
?>  