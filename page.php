<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Anaglyph_Theme
 * @since Anaglyph Theme 1.0
 */

get_header(); ?>
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
	?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-1">
					</div>
					<div class="col-sm-10">
						<?php the_content();?>
					</div>
					<div class="col-sm-1">
					</div>
				</div>
			</div>
	<?php
		endwhile;
	?>
<?php
   get_footer();
