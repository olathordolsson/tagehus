		
		<footer class="l-container m-global-footer l-clearfix" role="contentinfo">
			<div class="l-span-A12 l-clearfix">
				<?php if ( !function_exists('register_sidebar') || !dynamic_sidebar('Footer') ) {} ?>
				<p class="a-copyright a-fineprint">Copyright &copy; <?php echo date("Y"); ?></p>
			</div>
		</footer>

		<?php wp_footer(); ?>
		<!--[if lte IE 8]>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/helpers/selectivizr-min.js"></script>
		<![endif]-->
	</body>
</html>