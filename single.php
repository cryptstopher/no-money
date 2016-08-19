<?php get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <div id="the-post">
    <h2><?php the_title($before = '&#8220;', $after = '&#8221;'); ?></h2>
    <p><?php the_content(); ?></p>

<small>This entry was posted on 
<?php the_time('l, F jS, Y') ?> at 
<?php the_time() ?> and is filed 
under <?php the_category(', ') ?>.</small>
    </div>

<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    get_footer(); 
?>