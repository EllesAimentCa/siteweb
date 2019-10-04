
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
          <div id="en-tete-texte">
          <div id="titre_logo">
          <h1><?php echo get_bloginfo( 'name' ); ?></h1>
           <img src="<?php echo get_bloginfo('template_directory'); ?>/logo.svg"/>
        </div></div>
        <h2><?php echo get_bloginfo( 'description' ); ?></h2>
        </a>
      </header>

      <nav id="menu">
        <?php wp_nav_menu();?>
      </nav>
