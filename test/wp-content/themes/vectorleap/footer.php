<?php wp_footer(); ?>
</body>
<script>
    $('#myCarousel').carousel({
        interval: false
    });

    $(window).load(function () {
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

                </div>
            </div>
        </div>
    </div>

    <div class="button-box up"><div class="down-button"><i class="fa fa-chevron-up"></i></div></div>
    <div class="newsletter-bar">
        <div class="container">
            <p>Subscribe to recieve updates!</p>
            <input type="text" placeholder="Your Email">
            <button type="button">Subscribe</button>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <div class="row">
            <div class="col-md-8 col-xs-12">
                <?php
                $defaults = array(
                    'menu'            => 'footer',
                    'container'       => '',
                    'menu_class'      => 'menu',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<li>%3$s</li>',
                    'depth'           => 0
                );

                wp_nav_menu( $defaults );

                ?>
            </div>
            <div class="col-md-4 col-xs-12"><p>© <?php echo date('Y'); ?> Vectorleap. All Rights Reserved.</p></div>
            </div>
        </div>
    </div>
</footer>
</html>