<?php get_header();
/*
template name: Interior One
*/?>

<div style="padding: 60px;" class="visible-xs"></div>

<?php while ( have_posts() ) : the_post(); ?>

<div class="vl-interior-jumbotron-one">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
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
             <div class="col-md-6 col-sm-6">
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
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<div class="vl-interior">
    <div class="container">
        <div class="row vl-interior-list">
            <div class="col-md-6">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'Resources'
                ));
                $posts = $query->posts;
                if ($query->have_posts()) {
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php if(has_tag('consulting')) { ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        <?php } ?>
                    <?php endwhile; }?>
            </div>
            <div class="col-md-6">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'Resources'
                ));
                $posts = $query->posts;
                if ($query->have_posts()) {
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php if(has_tag('consulting-list')) { ?>
                            <?php the_content(); ?>
                        <?php } ?>
                    <?php endwhile; }?>
            </div>
        </div>
    </div>
</div>

<?php
$query = new WP_Query(array(
    'post_type' => 'CTA'
));
$posts = $query->posts;
if ($query->have_posts()) {
    while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php if(has_tag('support')) { ?>
            <div class="vl-cta">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="vl-cta-container" style="background: linear-gradient(0deg,rgba(43,49,56,0.7),rgba(43,49,56,0.7)), url('<?php the_post_thumbnail_url(); ?>')">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                <a href="#" class="btn btn-brand">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php endwhile; }?>


<div class="vl-interior">
    <div class="container">
        <div class="row vl-interior-two-col">
            <div class="col-md-6">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'Resources'
                ));
                $posts = $query->posts;
                if ($query->have_posts()) {
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php if(has_tag('training')) { ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <?php } ?>
                    <?php endwhile; }?>
            </div>
            <div class="col-md-6">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'Resources'
                ));
                $posts = $query->posts;
                if ($query->have_posts()) {
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php if(has_tag('support')) { ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <?php } ?>
                    <?php endwhile; }?>
            </div>
        </div>
    </div>
</div>

<?php endwhile; // end of the loop. ?>

<div style="padding: 60px" class="hidden-xs"></div>

<?php get_footer(); ?>