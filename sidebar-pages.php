<header>
    <h2>Kam dále</h2>
</header>
<?php
  $args = array(
    'theme_location'=>'footer_menu',
    'menu_class'=>'sidebar-menu',
    'fallback_cb'=>false,
    'depth'=>0,
  );
  wp_nav_menu($args);
?>