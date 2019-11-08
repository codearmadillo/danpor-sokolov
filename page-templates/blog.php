<?php
    /*
    Template name: Blog
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
        <h1>Novinky</h1>
        <?php
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => -1,
            'post_status'       => 'publish'
        );
        $query = new WP_Query($args);
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                $url = get_permalink($post->ID);
                $author = get_the_author_meta('display_name', $post->post_author);
                $date   = str_replace("-",".",explode(" ",$post->post_date)[0]);
                $title  = $post->post_title;
                $exc    = substr($post->post_content,0,150)."... ";
                echo '
                <article class="blog__post">
                    <header><h2><a href="'.$url.'" title="'.$title.'">'.$title.'</a></h2></header>
                    <span class="blog__post-author"><i class="fas fa-user-circle"></i> '.$author.'</span>
                    <span class="blog__post-date"><i class="fa fa-clock"></i> '.$date.'</span>
                    <p>'.$exc.'<a href="'.$url.'" title="'.$title.'">Pokračovat ve čtení</a></p>
                </article>';
            }
        } else {
            echo '<p>Vypadá to, že ještě žádné novinky publikovány nebyly. Zkuste to prosím později.</p>';
        }
        ?>
    </section>
  </div>
</div>

<?php
    get_footer();
?>  