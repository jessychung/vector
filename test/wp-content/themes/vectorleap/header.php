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
    <link href="https://fonts.googleapis.com/css?family=Cabin:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:500" rel="stylesheet">
    <link rel='shortcut icon' href='<?php echo content_url (); ?>/uploads/2017/07/VectorLeap_fav.png'>

    <!--Typekit-->
    <script src="https://use.typekit.net/lfv1qcr.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/ca8e0550f7.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.0/vivus.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body>

<!--loading icon-->

<div class="vl-loading">
    <div class="vl-loading-container">
        <div class="vl-ring">
            <object type="image/svg+xml" data="<?php echo content_url (); ?>/uploads/2017/07//vl_ring_animated.svg"  width="70px"></object>
        </div>
        <div class="vl-logo-animation">
            <img class="vl-logo-piece animated" src="<?php echo content_url (); ?>/uploads/2017/07/vl_five-01.svg" width="50px">
            <img class="vl-logo-piece animated" src="<?php echo content_url (); ?>/uploads/2017/07/vl_four-01.svg" width="50px">
            <img class="vl-logo-piece animated" src="<?php echo content_url (); ?>/uploads/2017/07/vl_three-01.svg" width="50px">
            <img class="vl-logo-piece animated" src="<?php echo content_url (); ?>/uploads/2017/07/vl_two-01.svg" width="50px">
            <img class="vl-logo-piece animated" src="<?php echo content_url (); ?>/uploads/2017/07/vl_one-01.svg" width="50px">
        </div>
    </div>
</div>

<?php if ( is_home() ) { ?>
    <div id="vl-particles"></div>
<?php } ?>

<div class="vl-mobile-menu hidden-sm hidden-md hidden-lg">
    <div class="vl-times">
        <div></div>
        <div></div>
    </div>

    <?php
    $defaults = array(
        'menu'            => 'mobile-menu',
        'container'       => '',
        'menu_class'      => 'menu',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'depth'           => 0
    );

    wp_nav_menu( $defaults );

    ?>
</div>

<div class="vl-mobile-logo-bar visible-xs" id="animateM1">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <a href="<?php home_url()?>"><img id="animate4" src="<?php echo content_url (); ?>/uploads/2017/07/vl-logo.svg" width="180px" height="100%" style="margin-left: -5px"></a>
            </div>
            <div class="col-xs-6 visible-xs" style="text-align: right">
                <div class="vl-hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    // init controller
    var controller = new ScrollMagic.Controller();
</script>

<div class="vl-logo-bar hidden-xs" id="animate1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="<?php echo get_site_url()?>"><img id="animate4" src="<?php echo content_url (); ?>/uploads/2017/07/vl-logo.svg" width="230px" height="100%" style="margin-left: -5px"></a>
            </div>

            <?php if ( is_home() ) { ?>
                <div class="vl-main-menu-container col-lg-6 col-md-6 col-sm-6">
            <?php } else { ?>
                <div class="vl-main-menu-container vl-interior-menu col-lg-6 col-md-6 col-sm-6">
            <?php } ?>

                <?php
                $defaults = array(
                    'menu'            => 'main-menu',
                    'menu_class'      => 'menu',
                    'menu_id'         => 'animate3',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'depth'           => 0
                );

                wp_nav_menu( $defaults );

                ?>
                <a href="" class="vl-contact-us" id="animate2">Contact</a>

            </div>
        </div>
    </div>
</div>

<div style="padding: 86px" class="hidden-xs"></div>

<script>

    var sceneOne = new ScrollMagic.Scene({
        duration: 150
    })
        .setTween("#animate1", 1, {backgroundColor: "rgba(255, 255, 255, 1)", paddingTop: "10px", paddingBottom: "10px", color: "#333", boxShadow: "0px 3px 5px rgba(50, 50, 93, 0.1)"})
        .addTo(controller);

    var sceneTwo = new ScrollMagic.Scene({
        duration: 150
    })
        .setTween("#animate2", 1, {backgroundColor: "#e03a2c", boxShadow: "0 3px 0 0 #bd281c", border: "1px solid #e03a2c", color: "#fff"})
        .addTo(controller);

    var sceneThree = new ScrollMagic.Scene({
        duration: 150
    })
        .setTween("#animate3 a", 1, {color: "#333"})
        .addTo(controller);

    var sceneFour = new ScrollMagic.Scene({
        duration: 150
    })
        .setTween("#animate4", 1, {width: "180px"})
        .addTo(controller);

    var sceneMone = new ScrollMagic.Scene({
        duration: 150
    })
        .setTween("#animateM1", 1, {backgroundColor: "rgba(255, 255, 255, 1)", paddingTop: "10px", paddingBottom: "10px", color: "#333", boxShadow: "0px 3px 5px rgba(50, 50, 93, 0.1)"})
        .addTo(controller);

    var sceneParticles = new ScrollMagic.Scene({
        duration: 700
    })
        .setTween("#vl-particles", 1, {opacity: '0'})
        .addTo(controller);
</script>

