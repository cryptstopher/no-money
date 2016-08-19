<?php get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <div id="the-post">
    <h2><?php the_title($before = '&#8220;', $after = '&#8221;'); ?></h2>
    <p><?php the_content(); ?></p>
    </div>


<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>


<?php get_footer(); ?>