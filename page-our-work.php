<?php get_header(); ?>
<div id="main-container" >
<section id="ourWork">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <div class="col-xs-12 col-sm-3 workSelections ">
          <div class="att-nav">
            <ul class="nav nav-stacked">
              <?php $i = 1; ?>
              <?php if(have_rows('gallery')) : while(have_rows('gallery')) : the_row(); ?>
                <li role="presentation" <?php if($i == 1){ echo 'class="active"'; } ?> style="background:  url(<?php  the_sub_field('gallery_image'); ?>);">
                  <a class="hvr-bounce-to-bottom" href="#gallery<?php echo $i; ?>" aria-controls="gallery<?php echo $i; ?>" role="tab" data-toggle="tab"><?php the_sub_field('gallery_name'); ?> </a>
                </li>
                <?php $i++; ?>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div><!-- workSelections -->
        <div class="col-xs-12 col-sm-9">
          <div class="att-disp">
          <div class="tab-content">
            <?php $c = 1; ?>
            <?php if(have_rows('gallery')) : while(have_rows('gallery')) : the_row(); ?>
              <div role="tabpanel" class="tab-pane fade <?php if($c == 1){ echo 'in active'; } ?>" id="gallery<?php echo $c; ?>" >
                <section id="carousel<?php echo $c; ?>" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                  <?php
                  $images = get_sub_field('carousel');
                  $item_counter = 1;
                  foreach($images as $image): ?>
                      <div class="item <?php if ($item_counter == 1) echo 'active'; ?> ">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
                      </div><!-- item -->
                  <?php $item_counter++; endforeach; ?>
                </div><!-- carousel-inner -->
          <!-- Controls -->

        <a class="left carousel-control" href="#carousel<?php echo $c; ?>" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel<?php echo $c; ?>" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </section><!-- carousel -->
  </div><!-- tabpanel -->
              <?php $c++; ?>
            <?php endwhile; endif; ?>
          </div><!-- tab-content -->
        </div><!-- att-disp -->
        </div><!-- col-xs-12 col-sm-9 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- ourwork -->

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
