<?php get_header(); ?>
<div id="main-container" >
	<section id="aboutContent">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
          		<!-- article -->
          		<article id="post-<?php the_ID(); ?>" <?php post_class('mainContent'); ?>>
          			<?php the_content(); ?>
          			<?php comments_template( '', true ); // Remove if you don't want comments ?>
          			<br class="clear">
          			<?php edit_post_link(); ?>
          		</article>
          		<!-- /article -->
          	<?php endwhile; ?>
          	<?php else: ?>
          		<!-- article -->
          		<article>
          			<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>
          		</article>
          		<!-- /article -->
          	<?php endif; ?>
          </div>
      </div><!-- row -->
  </div><!-- container -->
</section><!-- aboutContent -->
<section id="aboutIconArea">
  <div class="aboutIcons">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h2>
              WE WILL DO OUR BEST TO<BR />
              ACCOMMODATE YOUR EVERY TILE NEED
            </h2>
        </div>
      </div><!-- row -->
    </div><!-- container -->
        <div class="clearfix"></div>
        <div class="iconBackground">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
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
                <div class="col-xs-6 col-sm-3 icons">
                  <div class="spriteBox">
                    <a href="<?php echo home_url(); ?>/contact/"
                      <span class="sprite-5"></span>
                      <span class="spriteText">CONTACT US</span>
                    </a>
                  </div>
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
      </div><!-- iconBackground -->
  </div><!-- aboutIcons -->
  <a href="#video" id="scrollDown-2" class="scrollDown">
    <span class="glyphicon glyphicon-menu-down"></span>
  </a>
</section>
<section id="video">
  <div class="video-container videoLeft">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/CJkX_JOqXGk" frameborder="0" allowfullscreen></iframe>
  </div><!-- videoLeft -->
  <div class="videoRight">
    <h2>0%</h2>
    <h3>FINANCING</h3>
    <h4>FOR QUALIFIED BUYERS</h4>
  </div><!-- videoRight -->
  <div class="clearfix"></div>
</section><!-- video -->
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
