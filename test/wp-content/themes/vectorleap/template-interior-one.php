<?php get_header();
/*
template name: Interior One
*/?>

<div style="padding: 60px;" class="visible-xs"></div>

<?php while ( have_posts() ) : the_post(); ?>

<div class="vl-interior-jumbotron-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<div class="vl-interior-otherlinks">
    <div class="container">
        <div class="row">
                <?php
                $child_pages_query_args = array(
                    'post_type'   => 'page',
                    'post_parent' => $post->ID,
                    'orderby'     => 'menu_order',
                    'posts_per_page' => 2
                );

                $child_pages = new WP_Query( $child_pages_query_args );

                if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>
                 <div class="col-md-6">
                    <div class="vl-interior-one-links">
                        <div class="row">
                            <div class="col-md-4">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col-md-8">
                                <h1><?php the_title(); ?></h1>
                                <p><?php echo get_post_meta($post->ID, 'caption', true); ?></p>
                                <a href="<?php the_permalink(); ?>">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;
                ?>

        </div>
    </div>
</div>

<div class="vl-interior-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
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

<?php endwhile; // end of the loop. ?>

<div style="padding: 100px" class="hidden-xs"></div>

<?php get_footer(); ?>