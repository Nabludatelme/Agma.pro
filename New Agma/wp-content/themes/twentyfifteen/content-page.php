<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article  class="container "  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row inside_page">
		<h1 class="brand-heading"><?php echo $post->post_title; ?></h1>	
	</div>
	<div class="row black_text_inside">
		<div class="col-sm-10 col-md-offset-1">
		<?php echo get_the_content(); ?>
		</div>
	</div>

