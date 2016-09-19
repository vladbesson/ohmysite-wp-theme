<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ohmysite
 */

?>

<footer class="page-footer">
	<div class="page-footer__wrapper clearfix">
		<div class="page-footer__left-text">
			<p><? echo ot_get_option('footer_text'); ?></p>
		</div>

		<div class="page-footer__right-text">
			<p><a href="http://balabanovich.ru">Made with love</a></p>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
