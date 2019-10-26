<?php
    /* Setup page constants */
    define('CONST_TEMPLATEDIR','/wp-content/themes/danpor');

    /* Page meta */
    function getPageMeta(){
        $pageId = get_the_ID();
        $seoId = get_page_by_title('Default')->ID;

        $output = array(
            'title'=>get_field("meta_title"),
            'desc'=>'',
            'ogtitle'=>'',
            'ogdesc'=>'',
            'ogimg'=>''
        );

        return array(
            'title'     => (!get_field('meta_title', $pageId)) ? get_field('meta_title', $seoId) : get_field('meta_title', $pageId),
            'desc'      => (!get_field('meta_description', $pageId)) ? get_field('meta_description', $seoId) : get_field('meta_description', $pageId),
            'ogtitle'   => (!get_field('og_title', $pageId)) ? get_field('og_title', $seoId) : get_field('og_title', $pageId),
            'ogdesc'    => (!get_field('og_desc', $pageId)) ? get_field('og_desc', $seoId) : get_field('og_desc', $pageId),
            'ogimg'     => (!get_field('og_image', $pageId)) ? get_field('og_image', $seoId)['url'] : get_field('og_image', $pageId)['url'],
            'url'       => 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
        );
    }

    $meta = getPageMeta();
?>
<!doctype html>
<html lang="cs">
    <head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'GA_TRACKING_ID');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46155920-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-46155920-1');
        </script>
        <meta charset="utf-8">
        <meta name="author" content="Danpor Sokolov s.r.o.">
        <meta name="description" content="<?php echo $meta['desc']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="sitemap"rel="application/xml" title="Sitemap" href="/page-sitemap.xml" />

        <title><?php echo $meta['title']; ?></title>

        <!-- Meta viewport and scaling settings -->

        <!-- Facebook Opengraph -->
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="<?php echo $meta['ogtitle']; ?>" />
        <meta property="og:title" content="<?php echo $meta['ogtitle']; ?>" />
        <meta property="og:description" content="<?php echo $meta['ogdesc']; ?>" />
        <meta property="og:locale" content="cs" />
        <meta property="og:url" content="<?php echo $meta['url']; ?>" />
        
        <meta property="og:image" content="<?php echo $meta['ogimg']; ?>" />
        <meta property="og:image:type" content="image/jpg" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:image:alt" content="<?php echo $meta['ogdesc']; ?>" />

        <!-- Twitter -->

        <!-- Mobile platforms icons and Windows Metro icons -->
        <link rel="icon" type="image/png" href="<?php echo CONST_TEMPLATEDIR;?>/res/favicon-16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo CONST_TEMPLATEDIR;?>/res/favicon-32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo CONST_TEMPLATEDIR;?>/res/favicon-96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo CONST_TEMPLATEDIR;?>/res/favicon-128.png" sizes="128x128">
        <link rel="icon" type="image/png" href="<?php echo CONST_TEMPLATEDIR;?>/res/favicon-160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo CONST_TEMPLATEDIR;?>/res/favicon-196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="<?php echo CONST_TEMPLATEDIR;?>/res/favicon-228.png" sizes="228x228">
        
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo CONST_TEMPLATEDIR;?>/res/icon-appletouch-152.png">

        <!-- jQuery and bundle.js -->
        <!-- CDN jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo CONST_TEMPLATEDIR;?>/js/bundle.js"></script>
        <script type="text/javascript" src="<?php echo CONST_TEMPLATEDIR;?>/js/jquery-ui.min.js"></script>

        <!-- Wordpress head -->
        <?php wp_head();?>

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php echo CONST_TEMPLATEDIR;?>/css/flexboxgrid.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo CONST_TEMPLATEDIR;?>/css/default.css" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <div class="page__offcanvas">
            <header>
                Danpor Sokolov
                <span class="js-nav-main__toggle">
                    <i class="fa fa-bars" onclick="moduleOffcanvas.toggle()"></i>
                </span>
            </header>
            <?php
            $args = array(
                'theme_location'=>'main_menu',
                'menu_class'=>'nav-offcanvas',
                'fallback_cb'=>false,
                'depth'=>0
            );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="page__oncanvas">
            <section class="page__topbar hide-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 text-left">
                            <?php
                            $args = array(
                                'theme_location'=>'footer_additional',
                                'menu_class'=>'nav-topbar',
                                'fallback_cb'=>false,
                                'depth'=>0
                            );
                            wp_nav_menu($args);
                            ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-right">
                            <span class="topbar__contact">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:danporsokolov@volny.cz" title="Email">danporsokolov@volny.cz</a>
                            </span>
                            <span class="topbar__contact">
                                <i class="fa fa-phone"></i>
                                <a href="tel:+420352603122" title="Telefon">+420 352 603 122</a>
                            </span>
                            <span class="topbar__contact">
                                <i class="fa fa-phone"></i>
                                <a href="tel:+420777706986" title="Telefon">+420 777 706 986</a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <header class="page__header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-md-4" style="position: relative; box-sizing: border-box; padding: 8px;">
                            <a href="/" title="Danpor Sokolov s.r.o.">
                                <img src="<?php echo CONST_TEMPLATEDIR;?>/res/danporLogo.png" alt="Danpor Sokolov s.r.o." title="Danpor Sokolov s.r.o." class="page__header-logo">
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-8" style="padding-top: 21px;">
                            <span class="nav-main__toggle js-nav-main__toggle">
                                <i class="fa fa-bars" onclick="moduleOffcanvas.toggle()"></i>
                            </span>
                        <?php
                        $args = array(
                            'theme_location'=>'main_menu',
                            'menu_class'=>'nav-main',
                            'fallback_cb'=>false,
                            'depth'=>0
                        );
                        wp_nav_menu($args);
                        ?>
                        </div>
                    </div>
                </div>
            </header>   