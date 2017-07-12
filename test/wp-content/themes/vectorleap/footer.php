<?php wp_footer(); ?>
</body>
<script>
    $('#myCarousel').carousel({
        interval: false
    });

    $(window).on('load', function () {
        $('.vl-loading .vl-loading-container').delay(800).fadeOut();
        $('body').removeClass('stop-scrolling');
        $('.vl-loading').delay(1500).fadeOut(1000);
    });

    $(function () {

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
                <div class="col-md-2">
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
                <div class="col-md-2">
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
                <div class="col-md-2">
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
                <div class="col-md-2">
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