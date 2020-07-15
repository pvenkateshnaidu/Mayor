  
  <?php 

/*
Template Name:Contact
*/
get_header();
?>
 <section class="inner-banner">
            <div class="container">
                <h2 class="inner-banner__title"><?php the_title(); ?></h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->



        <div class="contact-info-one">
      <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=9115%20Conant%20StHamtramck%2C%20MI%2048212+(Shahab%20Ahmed)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">Create radius map</a></iframe></div><br />
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="contact-info-one__single">
                                <h4 class="contact-info-one__title">
                                    <i class="potisen-icon-pin"></i>
                                   <?php echo get_field('address',7); ?>
                                </h4>
                            </div><!-- /.contact-info-one__single -->
                        </div><!-- /.col-xl-4 -->
                        <div class="col-xl-4">
                            <div class="contact-info-one__single">
                                <h4 class="contact-info-one__title">
                                    <i class="potisen-icon-phone"></i>
                                    <a href="tel:<?php echo get_field('contact_number',7); ?>"><?php echo get_field('contact_number',7); ?></a>
                                </h4>
                            </div><!-- /.contact-info-one__single -->
                        </div><!-- /.col-xl-4 -->
                        <div class="col-xl-4">
                            <div class="contact-info-one__single">
                                <h4 class="contact-info-one__title">
                                    <i class="potisen-icon-mail"></i>
                                    <a href="mailto:<?php echo get_field('email',7); ?>"><?php echo get_field('email',7); ?></a>
                                </h4>
                            </div><!-- /.contact-info-one__single -->
                        </div><!-- /.col-xl-4 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </div><!-- /.contact-info-one -->
        <section class="contact-form-one">
            <div class="container">
                <div class="block-title text-center">
                    
                    <p class="block-title__tag-line">Contact With Us</p>
                    <h2 class="block-title__title">Leave a Message</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="contact-form-one__form contact-form-validated">
                 <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                </div><!-- /.contact-form-one__form -->
                <div class="result"></div><!-- /.result -->
            </div><!-- /.container -->
        </section>
        <?php get_footer(); ?>