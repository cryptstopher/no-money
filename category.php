<?php get_header(); ?>

  
 <h1>   <?php
			printf( __( 'More posts about %s...' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?> </h1>

	<p><em>			<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>'; ?> </em></p>

<center>***</center>

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