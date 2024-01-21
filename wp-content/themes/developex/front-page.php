<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package developex
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php
	// Output the content, including Gutenberg blocks
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			the_content();
		}
	}
	?>
	</main>

<?php
get_footer();
