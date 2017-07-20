<?php get_header(); ?>
<div id="main-container" >
	<section id="viewSelection">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h2>Our Tile Selection</h2>
					<ul class="nav nav-stacked">
						<?php if(have_rows('tile_types')): $i=1; while(have_rows('tile_types')): the_row(); ?>
							<li role="presentation"<?php if($i==1){ echo ' class="active"'; } ?>>
								<?php $tile_type = get_sub_field('tile_type'); ?>
								<a href="#<?php echo $tile_type; ?>" aria-controls="<?php echo $tile_type; ?>" role="tab" data-toggle="tab" data-tile_type="<?php echo $tile_type; ?>"><?php echo $tile_type; ?></a>
							</li>
						<?php $i++; endwhile; endif; ?>
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="tab-content">
						<?php if(have_rows('tile_types')): $c=1; while(have_rows('tile_types')): the_row(); ?>
							<div role="tabpanel" class="tab-pane fade<?php if($c==1){ echo ' in active'; } ?>" id="<?php the_sub_field('tile_type'); ?>">

							</div>
						<?php $c++; endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
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
