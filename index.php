<?php get_header(); ?>
 


       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>


   
     <article>
     <table>
    <td><img style="float: left; padding: 0; margin: 17px 10px 1px 0px;" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/no-money/images/small_globe.gif"></td>
    <td><h2 style="float: left; margin-bottom: 0;"><a href="<?php echo get_permalink(); ?>"><?php the_title($before = '&#8220;', $after = '&#8221;'); ?></a></h2></td>   
    </table>
    <div style="clear:both;"></div>
    <p style="padding: 0px 0px 0px 0px;"><?php the_excerpt(); ?></p>
    <small><?php the_tags( ); ?></small>
    </article>


   
<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>

<div style="clear:both;"></div>
<br>
<p style="text-align: right;"> <?php previous_posts_link(  ); ?> | <?php next_posts_link(  ); ?></p>

<?php get_footer(); ?>