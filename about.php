<?php 

/*
Template Name:About
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

        

        <section class="about-one">
            <div class="container">
                

                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-details__content">
                            <h3 class="block-title__title mb-3"><?php echo get_field('about_section_1_sub_title'); ?></h3>
                          <?php echo get_field('about_section_1_content'); ?>
                        </div><!-- /.event-details__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="event-details__image wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                        <img src="<?php echo get_field('gallery_image_1'); ?>" alt="Image">
                        </div><!-- /.event-details__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->

                <section class="about-four pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="about-four__content">
                            <div class="text-left">
                                <h2 class="block-title__title">Government</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <ul class="list-unstyled about-four__list aboutlist">
                              <?php echo get_field('government'); ?>
                        </div><!-- /.about-four__content -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-xl-6 col-lg-12 pt-5 pt-md-0">
                        <div class="about-four__content">
                            <div class="text-left">
                                <h2 class="block-title__title">Private Sector</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                              <?php echo get_field('private_sector'); ?>
                        </div><!-- /.about-four__content -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-xl-12 col-lg-12 pt-5">
                        <div class="about-four__content">
                            <div class="text-left">
                                <h2 class="block-title__title">Personal</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                           <?php echo get_field('personal'); ?>
                        </div><!-- /.about-four__content -->
                    </div><!-- /.col-lg-6 -->


                   

                </div><!-- /.row -->
            </div><!-- /.container -->
        
               

</section>

                <div class="block-title text-center">
                    
                   <!-- <p class="block-title__tag-line"><?php echo get_field('about_section_1_title'); ?> </p> -->
                    <!-- /.block-title__title -->
                </div><!-- /.block-title -->
             <!-- <?php echo get_field('about_section_1_content'); ?>   -->
            </div><!-- /.container -->
        </section><!-- /.thm-gray-bg about-one -->

        
     

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