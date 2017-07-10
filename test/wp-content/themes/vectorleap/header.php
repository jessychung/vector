<?php
/* Origami theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectorleap - Thentia</title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel='shortcut icon' href='<?php echo content_url (); ?>/uploads/2017/07/VectorLeap_fav.png'>

    <!--Typekit-->
    <script src="https://use.typekit.net/lfv1qcr.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body>

<div id="mobile-menu" class="hidden-sm hidden-md hidden-lg">
    <i class="fa fa-times" id="exit-icon"></i>
    <ul id="mobile-menuitems">
        <?php
        $defaults = array(
            'menu'            => 'main-menu',
            'container'       => '',
            'menu_class'      => 'menu',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<li>%3$s</li>',
            'depth'           => 0
        );

        wp_nav_menu( $defaults );

        ?>
    </ul>
</div>



<!--logo-bar-->
<div class="vl-logo-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="<?php home_url()?>"><img src="<?php echo content_url (); ?>/uploads/2017/07/vl-logo.svg" width="193px" height="62px" style="margin-left: -5px"></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right">

                <?php
                $defaults = array(
                    'menu'            => 'main-menu',
                    'menu_class'      => 'menu',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'depth'           => 0
                );

                wp_nav_menu( $defaults );

                ?>
                <a href="" class="vl-contact-us">Contact</a>

            </div>

        </div>
    </div>
</div>