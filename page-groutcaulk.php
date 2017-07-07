<?php get_header(); ?>
<div id="main-container" >
  <section id="groutContentArea">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('groutContent'); ?>>
                <?php the_content(); ?>
                <?php comments_template( '', true ); // Remove if you don't want comments ?>
                <br class="clear">
                <?php edit_post_link(); ?>
              </article><!-- /article -->
            <?php endwhile; ?>
            <?php else: ?>
            <article>
                <h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>
            </article><!-- /article -->
            <?php endif; ?>
            <div class="col-xs-6 groutLeft">
              <a href="<?php echo home_url(); ?>/virtual-designer/" class="btn-main">VIRTUAL DESIGNER</a>
            </div>

            <div class="col-xs-6 groutRight">
              <a href="<?php echo home_url(); ?>/our-work/" class="btn-main">OUR WORK</a>
            </div>
            <div class="col-xs-12 col-sm-3 stpLogo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/stp-logo.png" />
            </div>
            <div class="col-xs-4 col-sm-3 stpList">
              <ul>
                <li>Poly-Grout Plus</li>
                <li>Dry-Set Grout &nbsp;<span>&#40;Unsanded&#41;</span></li>
                <li>Versa-Tile Grout&nbsp;<span>&#40;Sanded&#41;</span></li>
              </ul>
            </div>
            <div class="col-xs-4 col-sm-3 stpList">
              <ul>
                <li>Grout Stain</li>
                <li>Perfect Seal Caulk</li>
                <li>Dual Purpose</li>
              </ul>
            </div>
            <div class="col-xs-4 col-sm-3 stpList">
              <ul>
                <li>Onestep White Thinset</li>
                <li>Super-Level</li>
                <li>Quickset</li>
              </ul>
            </div>
          </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- groutContent -->
  <section id="groutColors">
    <div class="container">
      <div class="row ">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 tradColors">
          <div class="centered">
            <h3>
              TRADITIONAL &#38;<BR />
              CLASSIC COLORS
            </h3>
            <?php if( have_rows('traditional_grout', 'options') ): ?>
              <ul>
              <?php while( have_rows('traditional_grout', 'options') ): the_row(); ?>
                <li><div class="colorBox-2" style= "background-color:<?php  the_sub_field('traditional_grout_color_#'); ?> ;"></div>
              <p><?php the_sub_field('traditional_grout_name'); ?></p></li>
              <?php endwhile; ?>

            </ul>
              <?php endif; ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 designColors">
          <div class="centered">
            <h3>
              DESIGNER COLORS
            </h3>
            <?php if( have_rows('designer_grout', 'options') ): ?>
              <ul>
              <?php while( have_rows('designer_grout', 'options') ): the_row(); ?>
                <li><div class="colorBox-2" style= "background-color:<?php  the_sub_field('designer_grout_#'); ?> ;"></div>
              <p><?php  the_sub_field('designer_grout_name'); ?></p></li>
              <?php endwhile; ?>

            </ul>
              <?php endif; ?>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section>
  <section id="video-2">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/o9IGfYDuKi8" frameborder="0" allowfullscreen></iframe>
        </div><!-- videoLeft -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- video-2 -->
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
  </section><!-- contact -->





<?php get_footer(); ?>
