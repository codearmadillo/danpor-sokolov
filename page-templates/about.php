<?php
    /*
    Template name: About
    */
?>

<?php
    get_header();

    require_once(get_template_directory()."/breadcrumbs.php");
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
                <h1><?php echo $post->post_title; ?></h1>
                <p><?php echo $post->post_content; ?></p>
                <div class="row">
                <?php
                foreach(get_field('person', $post->ID) as $person){
                    echo '
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <article class="about__person">
                            <h3 class="about__person-name">'.$person["name"].'</h3>
                            <h4 class="about__person-position">'.$person["position"].'</h4>
                            <span class="about__person-number">'.$person["contact"]["phone"].'</span>
                        </article>
                    </div>';
                }   
                ?>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
    get_footer();
?>  