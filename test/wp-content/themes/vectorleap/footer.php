<?php wp_footer(); ?>
</body>
<script>
    $('#myCarousel').carousel({
        interval: false
    });
</script>
<footer>
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
    <div class="map-screen"></div>
    <div class="map-bar" id="googleMap" style="width:auto;height:100px; ">

    </div>
</footer>
</html>