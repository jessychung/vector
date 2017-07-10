

<?php get_header();
/*
template name: contact
*/?>


<div class="interior-jumbotron">
    <div class="interior-pattern-bg">
        <div class="container">
            <h1>Contact</h1>
        </div>
    </div>
</div>

<div class="map">
    <div id="googleMap2" style="width:auto;height:450px; font-size: 0pt !important; "></div>
</div>

<div class="contact-info-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="contact-text">
                    <p>Contact us for more information or contact one of our representatives.</p>
                    <a href="/demo/">Request a demo</a>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12">
                <?php

                $query = new WP_Query('post_type=contact');
                if ($query->have_posts())
                {
                    while ( $query->have_posts() ) : $query->the_post();

                        $post = $query->post;
                        $thumb_id = get_post_thumbnail_id($post->ID);
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                        $thumb_url = $thumb_url_array[0];

                        ?>

                        <div class="col-md-4 col-sm-4 contact-info">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>

                        <?php

                    endwhile;
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>