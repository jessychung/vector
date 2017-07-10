

<?php get_header();
/*
template name: system
*/?>


<?php while ( have_posts() ) : the_post(); ?>

    <div class="interior-jumbotron">
        <div class="interior-pattern-bg">
            <div class="container">
                <h1>Our System features</h1>
            </div>
        </div>
    </div>

<div class="system-content-box">

    <div class="container sys-fixed hidden-xs hidden-sm">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="system-menu col-md-4">
                <ul>
                <?php
                $defaults = array(
                    'menu'            => 'system-fixed',
                    'container'       => 'div',
                    'menu_class'      => 'menu',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'depth'           => 0
                );

                wp_nav_menu( $defaults );

                ?>
                </ul>
            </div>
        </div>
    </div>

    <?php

    $query = new WP_Query('post_type=system');
    if ($query->have_posts())
    {
        while ( $query->have_posts() ) : $query->the_post();

            $post = $query->post;
            $thumb_id = get_post_thumbnail_id($post->ID);
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];

            ?>
            <div class="system-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="feature" id="<?php the_ID(); ?>">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </div>

            <?php

        endwhile;
    }
    ?>


    <div class="system-content">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="feature" id="pricing">
                        <h1>Pricing</h1>
                        <div class="icon-box"><div class="icon-button"><i class="fa fa-calendar"></i></div></div>
                        <?php

                        $query = new WP_Query('post_type=price');
                        if ($query->have_posts())
                        {
                            while ( $query->have_posts() ) : $query->the_post();

                                $post = $query->post;
                                $thumb_id = get_post_thumbnail_id($post->ID);
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                $thumb_url = $thumb_url_array[0];

                                ?>

                                <div class="col-md-4 col-sm-4">
                                    <div class="pricing-table">
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>

                                <?php

                            endwhile;
                        }
                        ?>
                        <div class="more-button"><a href="/demo/">Request a demo now</a></div>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>

    </div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>