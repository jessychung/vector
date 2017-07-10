<?php get_header(); ?>


<div class="vl-homepage-jumbotron">
    <div class="container">
        <div class="row is-flex">
            <div class="vl-bg-cube-one hidden-xs hidden-sm">
                <img class="vl-cube-one" src="<?php echo content_url (); ?>/uploads/2017/07/vl-cube-1.svg" width="800px"/>
            </div>
            <div class="col-md-6">
                <div class="vl-flex-container">
                    <?php
                    $query = new WP_Query('category_name=homepage-slogan');
                    if ($query->have_posts()) {
                        while ( $query->have_posts() ) : $query->the_post(); ?>

                            <h1><?php the_title(); ?></h1>

                            <a href="<?php echo site_url(); ?>/about-us/" class="btn btn-brand">Learn more</a>
                            <a href="<?php echo site_url(); ?>/about-us/" class="btn btn-light">Contact Us</a>

                        <?php endwhile; }?>
                </div>
            </div>
            <div class="col-md-6">
                <img class="vl-mock-demo" src="<?php echo content_url (); ?>/uploads/2017/07/vl-mock.png" width="100%"/>
            </div>
        </div>
    </div>
</div>


<div class="vl-homepage-features">
    <div class="container">
        <div class="row">
            <div class="vl-bg-cube-two hidden-xs hidden-sm">
                <img class="vl-cube-two" src="<?php echo content_url (); ?>/uploads/2017/07/vl-cube-2.svg" width="700px"/>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="vl-homepage-features-container">
                    <?php
                    $query = new WP_Query('category_name=homepage-features');
                    if ($query->have_posts()) {
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <h2><?php echo get_post_meta($post->ID, 'caption', true); ?></h2>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        <?php endwhile; }?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


<?php get_footer(); ?>