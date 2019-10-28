<?php
    get_header();
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
                <h1>Výsledky vyhledávání</h1>
                <h3>Hledaný výraz: <?php echo esc_html(get_search_query(false)); ?></h3>

                <?php
                $s=get_search_query();
                $args = array(
                    'post_type'         => 'any',
                    'posts_per_page'    => -1,
                    'post__not_in'      => array(1598,1434),
                    'post_status'       => 'publish',
                    's'                 => $s
                );
                $query = new WP_Query($args);
                if($query->have_posts()){
                    echo '<ol class="search__list">';
                    while($query->have_posts()){
                        $query->the_post();
                        $url = get_permalink($post->ID);
                        $title = $post->post_title;
                        echo '<li class="search__list-item"><a href="'.$url.'" title="'.$title.'">'.$title.'</a></li>';
                    }
                    echo '</ol>';
                } else {
                    echo '<p>Nenašli jsme nic, co by se shodovalo s parametry vyhledávání. Zkuste to, prosím, znovu.';
                }
                ?>

            </section>
        </div>
    </div>
</div>

<?php
    get_footer();
?>