<?php get_header(); ?>
<div id="main-container" >
	<section id="viewSelection">
		<div class="container">
			<div class="row selection-slider">
				<div class="col-sm-4">
					<h2>Our Tile Selection</h2>
					<ul class="nav nav-stacked">
						<?php if(have_rows('tile_types')): $i=1; while(have_rows('tile_types')): the_row(); ?>
							<li role="presentation"<?php if($i==1){ echo ' class="active"'; } ?>>
								<?php $tile_type = get_sub_field('tile_type'); ?>
								<a href="#<?php echo $tile_type; ?>" aria-controls="<?php echo $tile_type; ?>" role="tab" data-toggle="tab" data-tile_type="<?php echo $tile_type; ?>"><?php echo $tile_type; ?></a>
							</li>
						<?php $i++; endwhile; endif; ?>
					</ul>
					<div class="selection-buttons">
						<a href="<?php echo home_url('our-work'); ?>" class="btn-main">Our Work</a>
						<a href="<?php echo home_url('virtual-designer'); ?>" class="btn-main">Virtual Designer</a>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="tab-content">
						<?php if(have_rows('tile_types')): $c=1; while(have_rows('tile_types')): the_row(); ?>
							<div role="tabpanel" class="tab-pane fade<?php if($c==1){ echo ' in active'; } ?>" id="<?php the_sub_field('tile_type'); ?>">
								<?php if(get_sub_field('tile_type') == 'Ceramic'):
									$images = get_sub_field('tile_gallery'); if($images): ?>
										<ul class="tile-slider">
											<?php foreach($images as $image): ?>
												<li data-thumb="<?php echo $image['url']; ?>">
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													<p><?php echo $image['caption']; ?></p>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						<?php $c++; endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="tileContentArea">
    <div class="container">
			<div class=" row tile-info">
				<div class="col-sm-6">
					<div class="tile-info-item best-value">
						<h3>Best Value</h3>
						<?php the_field('best_value_content'); ?>
					</div>
					<div class="tile-info-item design-versatility">
						<h3>Design versatility</h3>
						<?php the_field('design_versatility_content'); ?>
					</div>
					<div class="tile-info-item clean-healthy-choice">
						<h3>Clean &amp; Healthy Choice</h3>
						<?php the_field('clean_healthy_choice_content'); ?>
					</div>
					<div class="tile-info-item durable">
						<h3>Durable</h3>
						<?php the_field('durable_content'); ?>
					</div>
					<div class="tile-info-item rich-artistic-heritage">
						<h3>Rich Artistic Heritage</h3>
						<?php the_field('rich_artistic_heritage_content'); ?>
					</div>
					<div class="tile-info-item low-maintenance">
						<h3>Low Maintenance</h3>
						<?php the_field('low_maintenance_content'); ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="tile-info-item water-resistance">
						<h3>Water-Resistance</h3>
						<?php the_field('water_resistance_content'); ?>
					</div>
					<div class="tile-info-item fire-resistance">
						<h3>Fire Resistance</h3>
						<?php the_field('fire_resistance'); ?>
					</div>
					<div class="tile-info-item fade-resistant">
						<h3>Fade Resistant</h3>
						<?php the_field('fade_resistant'); ?>
					</div>
					<div class="tile-info-item natural-environmental">
						<h3>Natural &amp; Environmental</h3>
						<?php the_field('natural_environmental_content'); ?>
					</div>
					<div class="tile-info-item">
						<p>Information gathered from The Tile Council of North America 2007.</p>
					</div>
				</div>
			</div>
    </div><!-- container -->
	</section><!-- tileContentArea -->
	<section id="brands">
		<div class="container">
			<h2>BRANDS WE CARRY</h2>
			<div class="brand-list">
				<ul class="list-unstyled list-inline">
					<?php if( have_rows('brands', 4) ): while ( have_rows('brands', 4) ) : the_row();?>
						<li><img src="<?php the_sub_field('brand_icon'); ?>" alt="Icon" /></li>
					<?php endwhile; endif;?>
				</ul>
			</div>
		</div><!-- container -->
	</section><!-- brands -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<?php echo do_shortcode('[contact-form-7 id="30" title="Contact form 1"]'); ?>
				</div>
				<div class="col-xs-12 col-md-4 ">
					<div class="facebookPlugin">
						<div class="fb-page" data-href="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/">J&amp;J Tile &amp; Marble Inc</a></blockquote></div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4 contactInfo">
					<ul>
						<li><a href="#"><span class="mailIcon"></span><span>jjtile123@verizon.net</span></a></li>
						<li><a href="tel:5407100303"><span class="phoneIcon"></span><span>540.710.0303 Phone</span></a><br />
						<a href="tel:5407100303"><span>540.7100377 Fax</span></a></li>
						<li><a href="https://www.google.com/maps/place/J+%26+J+Tile+%26+Marble+Inc/@38.261711,-77.5002987,17z/data=!3m1!4b1!4m5!3m4!1s0x89b6c113c4d9eed3:0x8dbc2edcfe751c71!8m2!3d38.261711!4d-77.49811" target="_blank"><span class="mapIcon"></span><span>4763 Jefferson Hwy<br /> Fredericksburg VA 22408</span></a></li>
						<li><a href="#"><span class="shopIcon"></span><span>Monday - Friday: 8am - 6pm<br />Saturdays: 8am - 5pm<br />Sundays: Closed</span></a></li>
					</ul>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section>
<?php get_footer(); ?>
