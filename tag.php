<?php get_header(); ?>

  
  <h1>The <?php get_tag() ?> information you requested:</h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
   
     <article>

    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title($before = '&#8220;', $after = '&#8221;'); ?></a></h2>   <p><?php the_excerpt(); ?></p>
    </article>
   
<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>

<br>
<p style="text-align: right;"> <?php previous_posts_link(  ); ?> | <?php next_posts_link(  ); ?></p>

<?php get_footer(); ?>