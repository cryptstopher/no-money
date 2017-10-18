<!DOCTYPE html>
<html>
    <head>
	<?php wp_head(); ?>
	<title>
	    <?php
	    global $page, $paged;
	    wp_title( '|', true, 'right' );
	    bloginfo( 'name' );
	    ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/no-money/style.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-79841775-2"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());

	 gtag('config', 'UA-79841775-2');
	</script>

</head>
<div style="clear:both;"></div> 
<body <?php body_class(); ?>>
<header>
<table>
<td>
    <div class="jerry">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style="float:left;margin: 0;" width="237px" height="178px" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/no-money/images/jerry_computer.gif" style="border:1px solid black;max-width:100%;" alt="Welcome to Computer!"></a>
    </div>
</td>
<td>
<div style="float:left">
<h1 style="margin-bottom: 0;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<aside style="margin-top: 0;"> <?php bloginfo( 'description' ); ?></aside>
</div></td></table></header>
