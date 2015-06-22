<?php 
get_header();
?>

<div class="page-container row-fluid">
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<?php if ( have_posts() ) : ?>
			<div class="container">
				<?php while(have_posts()) : the_post();?>    
			        <?php if(has_post_thumbnail() ) : ?>
			  			<?php the_post_thumbnail('feat_image', array('alt'=>get_the_title($post->ID),'class'=>"left", 'title'=>get_the_title($post->ID))); ?>
			  		<?php endif;?>
			        
			        <div class="entry-content">
			        	<?php the_content();?>
			        </div>
			        
			        
			    <?php endwhile;?>
		    </div>
		<?php else : ?>
				<?php get_template_part('not', 'found')?>
		<?php endif; // end have_posts() check ?>	
	</div>
</div>
<?php get_footer();?>