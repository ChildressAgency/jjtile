<?php get_header(); ?>
<div id="main-container" >
	<section id="tileContentArea">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        	   <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        		<article id="post-<?php the_ID(); ?>" <?php post_class('tileContent'); ?>>
        			<?php the_content(); ?>
        			<?php comments_template( '', true ); // Remove if you don't want comments ?>
        			<br class="clear">
        			<?php edit_post_link(); ?>
        		</article>
          		<?php endwhile; ?>
          	   <?php else: ?>
        		<article>
        			<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>
        		</article>
        			<?php endif; ?>
        </div>
      </div><!-- row -->
    </div><!-- container -->
	</section><!-- tileContentArea -->





<?php get_footer(); ?>
