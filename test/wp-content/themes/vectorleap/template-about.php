

<?php get_header();
/*
template name: about
*/?>


<?php while ( have_posts() ) : the_post(); ?>

    <div class="interior-jumbotron">
        <div class="interior-pattern-bg">
            <div class="container">
            <h1>About Us</h1>
            </div>
        </div>
    </div>

    <div class="about-menu">
        <?php
        $defaults = array(
            'menu'            => 'about-menu',
            'menu_class'      => 'menu',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => new description_walker()
        );

        wp_nav_menu( $defaults );

        ?>
    </div>
    <?php

    $query = new WP_Query('post_type=about');
    if ($query->have_posts())
    {
        while ( $query->have_posts() ) : $query->the_post();

            $post = $query->post;
            $thumb_id = get_post_thumbnail_id($post->ID);
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];

            ?>
            <div class="about-content">
                <div class="container">
                    <div class="about-info" id="<?php the_ID(); ?>">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
    <?php

endwhile;
}
?>
<?php endwhile; ?>

<?php get_footer(); ?>