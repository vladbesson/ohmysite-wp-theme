<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ohmysite
 */

get_header(); ?>

	<main>
		<div class="page single-post">
			<div class="page__wrapper clearfix">
				<div class="page__content">
					<?php the_post(); ?>
					<header class="page__header">
						<h1 class="page__title"><?php the_title(); ?></h1>
					</header>

					<?php the_content(); ?>
				</div>

				<?php get_sidebar(); ?>
			</div>
		</div>
	</main>

<?php
get_footer();
