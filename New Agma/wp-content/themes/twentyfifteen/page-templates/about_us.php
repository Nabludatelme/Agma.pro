<?php

/**
Template Name: О нас
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$default_query = clone $wp_query;
get_header(); ?>

<?php wp_reset_postdata();  $wp_query = clone $default_query; ?>

		<?php

			query_posts(
							$wp_query->query // это массив базового запроса текущей страницы
			);

	
		while (  have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			

		// End the loop.
		endwhile;
		?>


</article><!-- #post-## -->

	

<?php get_footer(); ?>
