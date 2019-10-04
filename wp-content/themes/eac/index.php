<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/logo.svg" />
        <?php wp_head(); ?>
    </head>

    <body>

      <header>

				<?php get_header(); ?>

	<div id="liste_articles">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;?>
    </div>
      <nav>
        	<ul class="pager">
            <li id="back_page"><?php previous_posts_link('<img src="'.get_bloginfo('template_directory').'/back.svg" />'); ?></li>
        		<li id="next_page"><?php next_posts_link('<img src="'.get_bloginfo('template_directory').'/next.svg" />'); ?></li>
        	</ul>
        </nav>
      <?php endif;
		?>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
