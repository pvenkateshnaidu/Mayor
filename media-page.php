<?php 

/*
Template Name:Media
*/
get_header();
?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/venobox/venobox.min.css">
 <section class="inner-banner">
            <div class="container">
                <h2 class="inner-banner__title"><?php the_title(); ?></h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
  <div class="container">
            <div class="media">
                <div class="row">
                    
                    <?php     
if (has_block('gallery', $post->post_content)) {
    $post_blocks = parse_blocks($post->post_content);
    $ids = $post_blocks[0][attrs][ids];
} 
// if there is not a gallery block do this
else {
    // gets the gallery info
    $gallery = get_post_gallery( $post->ID, false );
    // makes an array of image ids
   // var_dump( $gallery);
    $ids = explode ( ",", $gallery['ids'] );
}
$index = count($ids);
foreach($ids as $key=>$value)
{
	  $zIndex = $index - 1 - $key;
?>
                    <div>
                        <a class="venobox" data-gall="gallery01" href="<?php  echo wp_get_attachment_url( $ids[$zIndex] )?>"><img src="<?php  echo wp_get_attachment_image_url( $ids[$zIndex] ,'thumbnail')?>"></a>
                    </div>
              <?php } ?>
                  
                </div>
            </div>
                
                
                
                
                
            </div>

<?php get_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/venobox/venobox.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.venobox').venobox(); 
        });
    </script>