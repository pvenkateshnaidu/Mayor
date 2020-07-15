<?php 

/*
Template Name:Vision & Mission
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
<section class="thm-gray-bg about-one" style="padding-top: 60px;padding-bottom: 60px;">
            <div class="container">
                <!-- /.row -->               
                <h3 class="history-one__title text-center"><?php echo get_field('title_content'); ?></h3><!-- /.about-one__text -->
            </div><!-- /.container -->
        </section>
  <section class="history-one">
            <div class="container">
                <div class="row">
					
                    <div class="col-lg-12">
                        <div class="history-one__single wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="history-one__image">
                                <div class="history-one__image-inner"><img alt="" src="<?php echo get_field('section_1_image'); ?>"></div><!-- /.history-one__image-inner -->
                            </div><!-- /.history-one__image -->
                            <div class="history-one__content">
                                <h3 class="history-one__title">
                              <?php echo get_field('section_1_title'); ?>
                                </h3>
                             <?php echo get_field('section_1_content'); ?>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.history-one__single -->
                        <div class="history-one__single wow fadeInUp animated d-flex" style="visibility: visible; animation-name: fadeInUp;">
                            
                            <div class=" history-one__image order-1 order-sm-0">
                                <h3 class="history-one__title">
                                 <?php echo get_field('section_2_title'); ?>
                                </h3>
							<?php echo get_field('section_2_content'); ?>
                            </div><!-- /.history-one__content -->
                            <div class="history-one__content order-0 order-sm-1 mb-4">
                                <div class="history-one__image-inner"><img alt="" src="<?php echo get_field('section_2_image'); ?>"></div><!-- /.history-one__image-inner -->
                            </div><!-- /.history-one__image -->
                        </div><!-- /.history-one__single -->
                        
                         <div class="history-one__single wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="history-one__image">
                                <div class="history-one__image-inner"><img alt="" src="<?php echo get_field('section_3_image'); ?>"></div><!-- /.history-one__image-inner -->
                            </div><!-- /.history-one__image -->
                            <div class="history-one__content">
                                <h3 class="history-one__title">
                        <?php echo get_field('section_3_title'); ?>
                                </h3>
                            <?php echo get_field('section_3_content'); ?>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.history-one__single -->
						  <div class="history-one__single wow fadeInUp animated d-flex" style="visibility: visible; animation-name: fadeInUp;">
                            
                            <div class=" history-one__image order-1 order-sm-0">
                                <h3 class="history-one__title">
                              <?php echo get_field('section_4_title'); ?>
                                </h3>
								<?php echo get_field('section_4_content'); ?>
                            </div><!-- /.history-one__content -->
                            <div class="history-one__content order-0 order-sm-1 mb-4">
                                <div class="history-one__image-inner"><img alt="" src="<?php echo get_field('section_4_image'); ?>"></div><!-- /.history-one__image-inner -->
                            </div><!-- /.history-one__image -->
                        </div><!-- /.history-one__single -->
						   <div class="history-one__single wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="history-one__image">
                                <div class="history-one__image-inner"><img alt="" src="<?php echo get_field('section_5_image'); ?>"></div><!-- /.history-one__image-inner -->
                            </div><!-- /.history-one__image -->
                            <div class="history-one__content">
                                <h3 class="history-one__title">
                        <?php echo get_field('section_5_title'); ?>
                                </h3>
                            <?php echo get_field('section_5_content'); ?>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.history-one__single -->
						
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <?php             
$post = get_post(get_the_ID()); 
if($post->post_content !=''){
?>
          <section class="history-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <?php
         $post = get_post(get_the_ID()); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;  
                      ?>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
<?php get_footer(); ?>