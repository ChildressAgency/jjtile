<?php get_header(); ?>
<div id="main-container" >
	<section id="specials">
    <div class="container">
      <div class="row row-centered">

          <?php if( have_rows('specials') ): ?>

          <?php while( have_rows('specials') ): the_row(); ?>
            <div class=" col-xs-12 col-sm-4 col-centered">
              <div class="special">
                <img src="<?php the_sub_field('special_image'); ?>"  />
              </div>
             </div><!-- col-centered -->
          <?php endwhile; ?>

          <?php endif; ?>


        </div><!-- row -->
  </div><!-- container -->
	</section><!-- specials -->

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
