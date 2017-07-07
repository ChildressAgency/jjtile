<?php get_header(); ?>
<div id="main-container" >
	<section id="contactInfo">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 contactInfo">
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
	</section><!-- contactInfo -->
  <section id="contact-2">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 facebookReviewArea">
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
        <div class="col-xs-12 col-md-4">
					<?php echo do_shortcode('[contact-form-7 id="30" title="Contact form 1"]'); ?>
				</div>
      </div><!-- row -->
    </div><!-- container -->
  </section>
  <section id="followUs">
    <h2>FOLLOW US</h2>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="socialLinks">
            <div class="twitter"></div>
            <div class="instagram"></div>
            <div class="linkedIn"></div>
            <div class="facebook"></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 fbTwitterContainer">
          <div class="col-xs-12 col-sm-5">
            <div class="fb-page" data-href="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/" data-tabs="timeline" data-width="297" data-height="240" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/JJ-Tile-Marble-Inc-182672908463241/">J&amp;J Tile &amp; Marble Inc</a></blockquote></div>
          </div>
          <div class="col-xs-12 col-sm-7">
            <div class="twitterPage">
              <a class="twitter-timeline" data-width="540" data-height="240" href="https://twitter.com/JJTileandMarble">Tweets by JJTileandMarble</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div><!-- fbTwitterContainer -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- followUs -->



<?php get_footer(); ?>
