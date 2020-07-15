<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *

 * @package WordPress
 * @subpackage Mayor
 * @since Mayor 1.0
 */

?>
<section class="cta-two">
            
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/background/footer_img.jpg" alt="" />

                <div class="container">
                    <p class="cta-two__tag-line"><?php echo get_field('footer_banner_title_',7); ?></p><!-- /.cta-two__tag-line -->
                    <h3 class="cta-two__title"><?php echo get_field('footer_banner_sub_title',7); ?></h3><!-- /.cta-two__title -->
                    <!-- <a href="#" class="thm-btn cta-two__btn">Become a Volunteer</a> -->
                </div><!-- /.container -->
            </section>
    <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget">
                               
                                <div class="logo-box mb-4 clearfix">
                                    <a class="navbar-brand" href="<?php echo site_url(''); ?>">
                                        Shahab Ahmed
                                    </a>
                                </div>
                                <p class="footer-widget__text"><?php echo get_field('footer_about_content',7); ?></p><!-- /.footer-widget__text -->
                               <!-- <div class="footer-widget__social">
                                <a href="<?php echo get_field('face_book_url',7); ?>" class="fa fa-facebook-square"></a>
                            <a href="<?php echo get_field('twitter_url',7); ?>" class="fa fa-twitter"></a>                        
                            <a href="<?php echo get_field('instagram_url',7); ?>" class="fa fa-instagram"></a>
							 <a href="<?php echo get_field('youtube_url',7); ?>" class="fa fa-youtube"></a>
                                </div> footer-widget__social -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__links pl-5">
                                <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links-list">
                                     <?php	$menuLocations = get_nav_menu_locations(); 
$menuID = 2; 

$primaryNav = wp_get_nav_menu_items($menuID);
								?>
                              
									<?php foreach ( $primaryNav as $navItem ) {

    echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';

} ?>
                                </ul><!-- /.list-unstyled footer-widget__links-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <i class="potisen-icon-phone"></i><!-- /. -->
                                        <a href="tel: <?php echo get_field('contact_number',7); ?>"> <?php echo get_field('contact_number',7); ?></a>
                                    </li>
                                    <li>
                                        <i class="potisen-icon-mail"></i><!-- /. -->
                                        <a href="mailto: <?php echo get_field('email',7); ?>"> <?php echo get_field('email',7); ?></a>
                                    </li>
                                    <li>
                                        <i class="potisen-icon-pin"></i><!-- /. -->
                                      <?php echo get_field('address',7); ?>
                                    </li>
                                </ul><!-- /.list-unstyled footer-widget__post-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container text-center">
                    <!--    <p class="site-footer__copy">&copy; copyright 2020 by <a href="<?php echo site_url(''); ?>">Shahab.com</a></p> -->
						<p class="site-footer__copy">Designed by <a target="_blank" href="https://www.webmobilez.com">WebMobileZ</a></p>
                        <!-- /.site-footer__copy -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/TweenMax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/typed-2.0.11.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vegas.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/countdown.min.js"></script>

    <!-- template scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
    <?php wp_footer(); ?>
</body>

</html>

