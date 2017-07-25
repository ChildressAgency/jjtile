<?php get_header(); ?>
<div id="main-container" >	
	<section id="finance">
		<div class="media-group">
			<div class="media-left media-middle">
				<h2>0%</h2>
			</div>
			<div class="media-body media-middle">
				<div class="media-header">
					<h3>Financing</h3>
				</div>
				<h4>For Qualified Buyers</h4>
			</div>
		</div>
	</section><!-- finance -->
	<section id="aboutHomeSection">
			<div class="container">
				<div class="row">
					<div class="aboutContent">
					<div class="col-sm-10 col-sm-offset-1">
							<?php if( get_field('about_title') ): ?>
								<h2><?php the_field('about_title'); ?></h2>
							<?php endif; ?>
							<?php if( get_field('about_content') ): ?>
								<p><?php the_field('about_content'); ?></p>
							<?php endif; ?>
						</div>
						</div><!-- aboutContent -->
					</div><!-- row -->
			</div><!-- container -->
		<div class="aboutIcons">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
							<h2>
								WE WILL DO OUR BEST TO<BR />
								ACCOMMODATE YOUR EVERY TILE NEED
							</h2>
							<div class="col-xs-6 col-sm-3 icons">
								<div class="spriteBox">
									<a href="<?php echo home_url(); ?>/about/"
										<span class="sprite-1"></span>
										<span class="spriteText">LEARN MORE</span>
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 icons">
								<div class="spriteBox">
									<a href="<?php echo home_url(); ?>/tiles/"
										<span class="sprite-2"></span>
										<span class="spriteText">TILES</span>
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 icons">
								<div class="spriteBox">
									<a href="<?php echo home_url(); ?>/groutcaulk/"
										<span class="sprite-3"></span>
										<span class="spriteText">GROUT</span>
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3 icons">
								<div class="spriteBox">
									<a href="<?php echo home_url(); ?>/our-work/"
										<span class="sprite-4"></span>
										<span class="spriteText">OUR WORK</span>
									</a>
								</div>
							</div>
						</div>
					</div><!-- row -->
			</div><!-- container -->
		</div><!-- aboutIcons -->
	</section>
	<section id="selections">
		<div class="container">
				<div class="selectionList">
					<ul>
						<li>CERAMIC</li>
						<li>GLASS</li>
						<li>GRANITE</li>
						<li>METALS</li>
						<li>PORCELAIN</li>
						<li>TRAVERTINE</li>
						<li>TUMBLE</li>
					</ul>
					<a href="<?php echo home_url('tile'); ?>" class="btn-main btn-tan">VIEW OUR SELECTION</a>
					<a href="<?php echo home_url(); ?>/virtual-designer" class="btn-main btn-tan">VIRTUAL DESIGNER</a>
				</div>
		</div><!-- container -->
	</section><!-- selections -->
	<section id="brands">
		<div class="container">
			<h2>BRANDS WE CARRY</h2>
			<div class="brand-list">
				<ul class="list-unstyled list-inline">
					<?php if( have_rows('brands') ): while ( have_rows('brands') ) : the_row();?>
						<li><a href="<?php the_sub_field('brand_link'); ?>" target="_blank"><img src="<?php the_sub_field('brand_icon'); ?>" alt="Icon" /></a></li>
					<?php endwhile; endif;?>
				</ul>
			</div>
		</div><!-- container -->
	</section><!-- brands -->
	<section id="reviews">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 facebbookReviewArea">
					<div class="col-xs-6 reviewHeader">
						<h2>J & J Tile & Marble Inc</h2>
						<p>4763 Jefferson Davis Hwy, Fredericksburg, VA</p>
					</div>
					<div class="col-xs-6 facebookLink">
						<a href="#" class="btn-main"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-review-icon-trans.png" />Write a review</a>
					</div>
					<div class="col-xs-12 facebookWidgetArea">
						<?php get_sidebar(); ?>
					</div>
				</div><!-- facebookReviewArea -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- reviews -->
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
						<li><a href="mailto:jjtile123@verizon.net"><span class="mailIcon"></span><span>jjtile123@verizon.net</span></a></li>
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