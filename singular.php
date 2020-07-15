<?php 


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
   
<?php get_footer(); ?>
