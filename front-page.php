  <?php get_header(); ?>

  <!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
    
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <!--Mask color-->
        <div class="view">
          <!--Video source-->
          <video class="video-fluid" autoplay loop muted>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/images/background/michigan.mp4" type="video/mp4" />
          </video>
          <div class="mask rgba-purple-slight"></div>
        </div>
  
        <!--Caption-->
        <div class="carousel-caption container">
          <div class="animated fadeInDown row">
              <div class="col-md-6 text-left">
                <h2 class="static-banner-one__title text-white">
                   <?php echo get_field('home_banner_content'); ?>
					
                </h2>
				  <h2 class="static-banner-one__title text-white"><?php echo get_field('banner_description'); ?></h2>
                <p class="static-banner-one__text text-white"><?php //echo get_field('banner_description'); ?></p> 
                <button type="submit" class="thm-btn static-banner-one__form-btn" data-toggle="modal" data-target="#myModal">Join Campaign</button>
            </div>
              <div class="col-md-6 mmimg">
                  <img src="<?php echo get_field('home_banner_image'); ?>" alt="">
              </div>
          </div>
        </div>
        <!--Caption-->
      </div>
  
    </div>
    <!--/.Slides-->
  </div>
  <!--Carousel Wrapper-->

  
        
        <section class="about-three thm-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/mission-vision.jpg" alt="Awesome Image" />
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="block-title text-left">
                            
                                <h2 class="block-title__title">  <?php echo get_field('mission_title'); ?></h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <div class="about-three__box-wrap">
                                <div class="about-three__box">
									 <i class="potisen-icon-work"></i>
                                   
                                    <h4 class="about-three__box-title"> <?php echo get_field('mission_icon_1_title'); ?></h4><!-- /.about-three__box-title -->
                                </div><!-- /.about-three__box -->
                                <div class="about-three__box">
                                    <i class="potisen-icon-politics"></i>
                                    <h4 class="about-three__box-title"> <?php echo get_field('mission_icon_2_title'); ?></h4><!-- /.about-three__box-title -->
                                </div><!-- /.about-three__box -->
                                <div class="about-three__box">
                                   
									  <i class="potisen-icon-bid"></i>
                                    <h4 class="about-three__box-title"> <?php echo get_field('mission_icon_3_title'); ?> </h4><!-- /.about-three__box-title -->
                                </div><!-- /.about-three__box -->
								
                            </div><!-- /.about-three__box-wrap -->
							   <!--<div class="about-three__box-wrap">
                                <div class="about-three__box">
									 <i class="potisen-icon-work"></i>
                                   
                                    <h4 class="about-three__box-title"> Nature Protection</h4>
                                </div>
                                <div class="about-three__box">
                                    <i class="potisen-icon-politics"></i>
                                    <h4 class="about-three__box-title"> Senior Citizen and Disabled Support </h4>
                                </div>
                                <div class="about-three__box">
                                   
									  <i class="potisen-icon-bid"></i>
                                    <h4 class="about-three__box-title"> Upcoming Covid Effect Management</h4>
                                </div>
								
                            </div> -->
							        
                          <?php echo get_field('mission_description'); ?><!-- /.about-three__text -->
                            <a href="<?php echo site_url('visionandmission'); ?>" class="thm-btn about-three__btn">Learn More</a>
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-three -->
        
        <section class="about-two">
            <div class="container">
                <div class="block-title text-center">
                   <!-- <p class="block-title__tag-line">About</p> -->
                    <h2 class="block-title__title"><?php echo get_field('after_mission_section_title'); ?></h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-two__content">
                           <!-- <div class="row">
                                <div class="col-sm-4">
                                    <img src="<?php echo get_field('history_image_1'); ?>" alt="" class="img-fluid" />
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo get_field('history_image_2'); ?>" alt="" class="img-fluid" />
                                </div>
                                <div class="col-sm-4">
                                    <img src="<?php echo get_field('history_image_3'); ?>" alt="" class="img-fluid" />
                                </div>
                            </div> -->
                            
                           <?php echo get_field('history_description'); ?><!-- /.about-two__text -->
							 <a href="<?php echo site_url('about'); ?>" class="thm-btn about-three__btn">Learn More</a>
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->

        <!-- The Modal -->

        <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Join Campaign</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <p>Enter your details to join campaign.</p>
           <?php echo do_shortcode('[contact-form-7 id="241" title="Join Campaign"]'); ?>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
        <!--  <button type="button" class="btn btn-primary thm-btm" data-dismiss="modal">Close</button> -->
        </div>
  
      </div>
    </div>
  </div>
        
       
 <?php get_footer(); ?>
<script>
      if ($('.static-banner-one__bg').length) {
            $('.static-banner-one__bg-inner').vegas({
                slides: [
                    { src: "<?php echo get_field('home_banner_image'); ?>" },
                    
                ],
                transition: 'slideUp',
                timer: false
            });
        }
</script>