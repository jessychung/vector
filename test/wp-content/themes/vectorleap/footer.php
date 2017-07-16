<?php wp_footer(); ?>
<script>

    $(window).on('load', function () {
        $('.vl-loading .vl-loading-container').delay(800).fadeOut();
        $('body').removeClass('stop-scrolling');
        $('.vl-loading').delay(1500).fadeOut(1000);
    });

    $(document).ready(function () {

        particlesJS.load('vl-particles', '<?php echo content_url (); ?>/themes/vectorleap/particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });


        $('.vl-hamburger').on('click', function () {

            $('.vl-mobile-menu').fadeIn('slow');

            $('.vl-times').find('div').each(function () {
                $(this).addClass('times');
            });

            $('.vl-mobile-menu .menu li').each(function(i) {
                var menuItem = $(this);
                setTimeout(function() {
                    menuItem.addClass('showMobileMenu');
                },  i*200);
            });

        });

        $('.vl-times').on('click', function () {
            $('.vl-mobile-menu').fadeOut();
            $('.vl-mobile-menu .menu li').removeClass('showMobileMenu');
            $('.vl-times').find('div').each(function () {
                $(this).removeClass('times');
            });
        });

        $('#vl-carousel').carousel({
            interval: false
        });

        $('#vl-carousel-mobile').carousel({
            interval: false
        });

        $('.carousel .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });

        var vectorleapAnimation = {};

        vectorleapAnimation.loop = function() {

            var time = 100;

            $($('.vl-logo-piece').get().reverse()).each(function( i ) {
                var $this = $(this);
                setTimeout(function () {
                    $this.addClass('fadeInDown');
                }, time += 100);
            });
        };

        vectorleapAnimation.loop();

        vectorleapAnimation.stopLoop = function () {
            $('.vl-logo-piece').removeClass('fadeInDown');
            vectorleapAnimation.loop();
        };

        $('.vl-logo-piece:first-of-type').on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
            setTimeout(function () {
                vectorleapAnimation.stopLoop();
            },1500);
        });


    });
</script>
</body>

<footer>

    <div class="vl-footer-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vl-footer-cta-container">
                        <?php
                        $query = new WP_Query('category_name=footer-cta');
                        if ($query->have_posts()) {
                            while ( $query->have_posts() ) : $query->the_post(); ?>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <input type="text" class="vl-input-left" placeholder="Your Email">
                                <button type="button" class="btn btn-brand vl-input-right">Count me in</button>
                            <?php endwhile; }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vl-footer-links">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <?php
                    $defaults = array(
                        'menu'            => 'footer-1',
                        'container'       => '',
                        'menu_class'      => 'menu',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'depth'           => 0
                    );

                    wp_nav_menu( $defaults );

                    ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <?php
                    $defaults = array(
                        'menu'            => 'footer-2',
                        'container'       => '',
                        'menu_class'      => 'menu',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'depth'           => 0
                    );

                    wp_nav_menu( $defaults );

                    ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <?php
                    $defaults = array(
                        'menu'            => 'footer-3',
                        'container'       => '',
                        'menu_class'      => 'menu',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'depth'           => 0
                    );

                    wp_nav_menu( $defaults );

                    ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <h1>Follow Us</h1>
                    <div class="vl-social">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="vl-social">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vl-footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vl-copyright">
                        <div class="thentia-family">
                            <p>Part of the</p>
                            <img src="<?php echo content_url (); ?>/uploads/2017/07/vl_thentia.png" />
                            <p>Family</p>
                        </div>
                        <p>Copyright © <?php echo date('Y'); ?> Thentia Global Systems Inc. <br/>
                            All Rights Reserved. Vectorleap is a trademark of Thentia Global Systems Inc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
</html>