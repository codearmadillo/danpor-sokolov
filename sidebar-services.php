<header>
    <h2>Co nabízíme</h2>
</header>
<?php
  $pages = wp_list_pages(array(
    'child_of'  => $post->post_parent,
    'exclude'   => $post->ID,
    'post_type' => 'page',
    'echo'      => 0,
    'title_li'  => null
  ));
  if($pages){
    echo '
      <ul class="sidebar-menu">
      '.$pages.'
      </ul>
    ';
  }
?>