
		<div class="menu-mobile-wrapper">
			<div class="menu-mobile">
				<form action="<?php echo home_url(); ?>" type="get">
					<input type="text" class="search form-control" name="s" value="<?PHP echo get_search_query();?>" placeholder="Buscar...">
				</form>
				<?PHP
				wp_nav_menu(array(
					'theme_location'  => 'header',
					'menu'            => 'header',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'list-unstyled',
					'menu_id'         => 'header',
					'echo'            => true,
					'fallback_cb'     => '',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => -1,
					'walker'          => ''
				));
				?>
			</div>
		</div>

		<div class="footer-wrapper">
			<?php if ( is_active_sidebar( 'footer' ) ) : ?>
			<div class="footer">
				<div class="container">
					<div class="row">
						<?php dynamic_sidebar( 'footer' ); ?>
					</div>
				</div>
			</div>
			<?php else: ?>
			<br />
			<br />
			<?php endif; ?>

			<div class="license">
				<div class="container">
					<!--EMMGFX. Contenido con licencia general Creative Commons BY-SA, excepto en lo expresamente diferenciado.-->
					<?PHP $footer_phrase = get_option('footer-phrase'); ?>
					<?PHP if( $footer_phrase === false || empty($footer_phrase) ): ?>
						<p><?PHP echo bloginfo('name')?>, <?PHP echo date('Y')?>. Theme <a href="https://github.com/emmgfx/material-for-coders" target="_blank">Material for Coders</a></p>
					<?PHP else: ?>
						<p><?PHP echo $footer_phrase?></p>
					<?PHP endif; ?>

				</div>
			</div>
		</div>

	    <script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/headroom.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/jQuery.headroom.min.js"></script>
	    <script src="<?PHP echo get_template_directory_uri(); ?>/assets/js/js.js"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<?php wp_footer(); ?>

	</body>
</html>
