<?php 

/*Template Name: Email Marketing template Two*/
get_header();
?>

<div class="page-container row-fluid">
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<?php if ( have_posts() ) : ?>
				<?php while(have_posts()) : the_post();?>    
			        <?php the_content();?>
			    <?php endwhile;?>
		<?php else : ?>
				<?php get_template_part('not', 'found')?>
		<?php endif; // end have_posts() check ?>	
	</div>
</div>
<?php get_footer();?>