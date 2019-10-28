<div class="page__breadcrumbs">
    <div class="container">
        <a href="/" title="Domovská stránka">Domů</a><i class="fa fa-angle-right"></i>
        <?php
        /* Parent post */
        global $post;
        if(is_page() && $post->post_parent){
            $title = get_the_title($post->post_parent);
            $url = get_permalink($post->post_parent);
            echo '<a href="'.$url.'" title="'.$title.'">'.$title.'</a><i class="fa fa-angle-right"></i>';
        }
        /* Current post */
        $title = get_the_title($post->ID);
        $url = get_permalink($post->ID);
        echo '<a href="'.$url.'" title="'.$title.'">'.$title.'</a>';
        ?>
    </div>
</div>