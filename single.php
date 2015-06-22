<?php 
get_header();
?>
<div class="blog-single-container row-fluid">
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="container">
	
	<?php while(have_posts()) : the_post();?>   
		
					<h1><?php the_title(); ?></h1>
	         
			        <?php if(has_post_thumbnail() ) : ?>
			  				<?php the_post_thumbnail('full', array('alt'=>get_the_title($post->ID),'title'=>get_the_title($post->ID))); ?>
			  		<?php endif;?>
        
        			<div class="clearfix"></div>
                
        
        			<div class="entry-content">
			        	<?php the_content();?>
			        </div>
        
    <?php endwhile;?>	
    
    
    <?php 
	// pagination
	content_nav(); ?>
    
    
     <div class="comments-area row-fluid">
		<?php comments_template('', true ); ?>
	</div>    
    
    </div> <!-- end container -->
    </div>
</div>

<?php get_footer();?>


