<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <?php wp_head(); ?>
    </head>

    <body>

    <header class="header_annexe">
    <?php get_header(); ?>
    <!-- </header> est dans header.php> -->


  			<?php
  				if ( have_posts() ) : while ( have_posts() ) : the_post();

  					get_template_part( 'content_page', get_post_format() );

  				endwhile; endif;
  			?>
        <!-- fin de div class dans content.php-->
  <?php get_footer(); ?>
