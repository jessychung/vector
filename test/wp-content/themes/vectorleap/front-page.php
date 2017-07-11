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
                <img class="vl-cube-two" src="<?php echo content_url (); ?>/uploads/2017/07/vl-cube-2.svg" width="600px"/>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="vl-homepage-features-container">
                    <?php
                    $query = new WP_Query('category_name=homepage-features');
                    if ($query->have_posts()) {
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <h2><?php echo get_post_meta($post->ID, 'caption', true); ?></h2>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        <?php endwhile; }?>

                    <div id="myCarousel" class="carousel slide vl-features-slide">

                        <div class="carousel-inner">
                            <?php
                            $query = new WP_Query(array(
                                'post_type' => 'Features Icon',
                                'posts_per_page' => 1
                            ));
                            $posts = $query->posts;
                            if ($query->have_posts()) {
                                while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="item active">
                                        <?php the_post_thumbnail(); ?>
                                            <h1><?php the_title(); ?></h1>

                                    </div>
                                <?php endwhile; }?>

                            <?php
                            $query = new WP_Query(array(
                                'post_type' => 'Features Icon',
                                'offset' => 1
                            ));
                            $posts = $query->posts;
                            if ($query->have_posts()) {
                                while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="item">
                                        <?php the_post_thumbnail(); ?>
                                        <h1><?php the_title(); ?></h1>

                                    </div>
                                <?php endwhile; }?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="vl-homepage-features-summary">
    <div class="container">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'Features Summary'
        ));
        $i = 0;
        if ($query->have_posts()) {
            while ( $query->have_posts() ) : $query->the_post();
            $i++ ?>

                <?php if($i % 2) { ?>

                    <div class="vl-features-summary-single even row is-flex">

                        <div class="col-md-6">
                            <div class="vl-flex-container">
                                <h2><?php echo get_post_meta($post->ID, 'caption', true); ?></h2>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>

                <?php } else { ?>
                    <div class="vl-features-summary-single odd row is-flex">
                        <div class="col-md-6">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-md-6">
                            <div class="vl-flex-container">
                                <h2><?php echo get_post_meta($post->ID, 'caption', true); ?></h2>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                <?php }?>

            <?php endwhile; }?>
    </div>
</div>

<div class="vl-clients">
    <div class="vl-clients-container container">
        <div class="row">
            <div class="col-md-12">
                <h2>Some of our happy customers</h2>
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'Clients',
                    'posts_per_page' => 4
                ));
                $posts = $query->posts;
                if ($query->have_posts()) {
                    while ( $query->have_posts() ) : $query->the_post(); ?>

                        <?php the_post_thumbnail(); ?>
                    <?php endwhile; }?>
            </div>
        </div>
    </div>
</div>

<div style="padding: 100px"></div>

</body>


<?php get_footer(); ?>