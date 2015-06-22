<?php global $data; ?>

<div class="footer row-fluid">
		<div class="footer-inner container">
		  	<div class="copyright">
		  		<?php if ( is_active_sidebar( 'f_sidebar_one' ) ) : ?>
		        	<?php dynamic_sidebar( 'f_sidebar_one' );  ?>
		        <?php endif;?>
		  	</div>
		 </div>
</div>
<?php get_template_part('js/custom', 'script');?>
<?php echo $data['space_body']; ?>
<?php echo $data['google_analytics']; ?>

<a class="go-top" href="#"></a>
<?php wp_footer();?>
</body>
</html>