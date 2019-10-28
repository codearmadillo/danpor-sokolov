<header>
    <h2>Co nabízíme</h2>
</header>
<?php
    $pages = wp_list_pages(array(
        'child_of'  => $post->post_parent,
        'exclude'   => $post->ID,
        'post_type' => 'page',
        'echo'      => 0,
        'title_li'  => null,
        'link_before' => '<i data-fa-transform="shrink-8" class="fas fa-caret-square-right"></i>'
    ));
    if($pages){
        echo '
        <ul class="sidebar-menu">
        '.$pages.'
        </ul>
        ';
    }
?>