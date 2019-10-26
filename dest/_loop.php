<?php
    $isSearch = (esc_html(get_search_query(false))) ? esc_html(get_search_query(false)) : '';
    $args = array(
        'post_type'         => 'any',
        'posts_per_page'    => -1,
        'post__not_in'      => array(1598,1434),
        'post_status'       => 'publish',
        's'                 => $isSearch
    );
    $query = new WP_Query($args);
    if($query->have_posts()){
        while($query->have_posts()){
            $query -> the_post();
            echo the_title();
            echo "<br>";
        }
    }
?>