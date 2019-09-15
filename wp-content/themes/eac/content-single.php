<div class="article">
	<h1><?php the_title(); ?></h1>
  <div class="article_thumbnail">
    <?php if ( has_post_thumbnail() ) : the_post_thumbnail();
      endif;?>
  </div>
	<div class="auteur_date"><p><?php the_date(); ?></p> <p><?php if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors_posts_links();
} else {
    the_author_posts_link();
} ?></p></div>
  <div class="contenu">
    <?php the_content(); ?>
  </div>
</div><!-- /.blog-post -->
