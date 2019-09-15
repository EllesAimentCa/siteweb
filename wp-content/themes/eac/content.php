<div class="blog-post">
		<img><?php if ( has_post_thumbnail() ) : the_post_thumbnail('medium');
	endif;?></img>
	<h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
 <?php the_excerpt(); ?>
</div>
