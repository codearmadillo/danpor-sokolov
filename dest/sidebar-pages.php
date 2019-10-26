<header>
    <h2>Kam dále</h2>
</header>
<?php
$args = array(
    'theme_location'=>'footer_menu',
    'menu_class'=>'sidebar-menu',
    'fallback_cb'=>false,
    'depth'=>0,
    'link_before' => '<i data-fa-transform="shrink-8" class="fas fa-caret-square-right"></i>'
);
wp_nav_menu($args);
?>