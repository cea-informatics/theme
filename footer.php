<?php
/**
 * Footer template - Foxtown child theme
 */
?>

	</main><!-- #main -->

	<footer id="footer" class="foxtown-footer">
		<div class="foxtown-footer__inner">

			<div class="foxtown-footer__content">
				<!-- Contenu footer ici -->
				<p><?php bloginfo('name'); ?></p>
			</div>

			<div class="foxtown-footer__legal">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
			</div>

		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
