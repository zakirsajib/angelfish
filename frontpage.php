<?php 
/*Template Name: Home*/
get_header();
?>

<div class="home-container row-fluid">
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	  	<?php if ( have_posts() ) : ?>
			  <!-- <div class="container"> -->
				  	<?php while(have_posts()) : the_post();?>
				  		<?php get_template_part('includes/slideshow');?>
				  		<div class="clearfix"></div>
				  		<div class="row-fluid" id="section-one">
				  			<div class="container">
				  				<div class="free-download offset2">
				  					<div class="span11 mobile-freedownload">
				  						<?php the_field('col_one')?>
				  						<div class="span3">
				  							<div class="free-ebook">
				  								<img src="<?php the_field('col_two')?>" alt="">
				  							</div>
				  						</div>
				  						<div class="span4 free-download-msg"><?php the_field('col_three')?></div>
				  					
				  				
				  					<div class="free-ebook-download-btn span3">
				  						<?php the_field('download_shortcode_section_one')?>
				  					</div> <!-- end span2 -->
				  					
				  					</div> <!-- end span11 -->
				  					
				  				</div> <!-- end free-download -->
				  				
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-two">
				  			<div class="container">
				  				<div class="inbound">
				  						<?php the_field('heading_section_two')?>
				  					<div class="inbound-text">
				  						<?php the_field('descriptions_section_two')?>
				  					</div>
				  				</div>
				  			</div>
				  			<div class="arrow do-arrow1"></div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-three">
				  			<div class="container">
				  				<div class="icons-panel">
				  					
				  					<div class="span4">
				  						<a href="<?php the_field('url_section_three')?>"><div class="web-icon"><img src="<?php the_field('icon_section_three')?>" alt="Angelfish <?php the_field('heading_section_three')?>"></div>
				  						<p class="lead"><?php the_field('heading_section_three')?></p></a>
				  					</div>
				  					
				  					<div class="span4">
				  						<a href="<?php the_field('url_two_section_three')?>"><div class="web-icon"><img src="<?php the_field('icon_two_section_three')?>" alt="Angelfish <?php the_field('heading_two_section_three')?>"></div>
				  						<p class="lead"><?php the_field('heading_two_section_three')?></p></a>
				  					</div>
				  					
				  					<div class="span4">
				  						<a href="<?php the_field('url_three_section_three')?>"><div class="web-icon"><img src="<?php the_field('icon_three_section_three')?>" alt="Angelfish <?php the_field('heading_three_section_three')?>"></div>
				  						<p class="lead"><?php the_field('heading_three_section_three')?></p></a>
				  					</div>
				  					
				  					<div class="clearfix"></div>
				  					<?php the_field('request_button_section_three')?>
				  				</div>
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-four">
				  		<a name="web"></a>
				  			<div class="container">
				  				<div class="web-design">
				  					<?php the_field('web_design_contents')?>
				  					<?php the_field('request_button_shortcode_web')?>			  				
				  				</div>
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-five">
				  			<div class="container">
				  				<div class="download-ebook row-fluid">
				  					<div class="span8 left-col">
				  						<div class="span7 book">
				  						<img class="aligncenter" src="<?php the_field('ebook_photo')?>" alt="">
				  						</div>
				  						<div class="span5">
				  							<div class="download-texts">
				  								<?php the_field('download_texts')?>
				  								<div class="clearfix"></div>
				  								<?php the_field('download_button_shortcode_ebook')?>
				  						</div>
				  					</div>
				  					
				  					<div class="span4 right-col">
				  						<div class="right-col-contents">
				  							<?php the_field('right_column_contents')?>
				  						</div>
				  						<div class="clearfix"></div>
				  						<?php the_field('request_button_shortcode_download')?>
				  					</div>
				  					
				  				</div> <!-- end download-ebook -->
				  			</div> <!-- end container -->
				  			
				  			<div class="arrow do-arrow1"></div>
				  			
				  		</div> <!-- end row-fluid -->
				  		
				  		<div class="row-fluid" id="section-six">
				  		<a name="inbound"></a>
				  			<div class="container">
				  				<div class="inbound-mrk row-fluid">
				  					<?php the_field('heading_inbound')?>
				  				</div>
				  				
				  				<?php get_template_part('home-details/inbound')?>
				  				
				  				
				  				<div class="clearfix"></div>
				  					
				  					<?php the_field('another_heading')?>
				  									  					
				  					<?php the_field('button_shortcode_inbound')?>
				  				
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-seven">
				  		<a name="insight"></a>
				  			<div class="container">
				  				<div class="customer-insight row-fluid">
				  					<?php the_field('heading_insight')?>
				  				</div>
				  				
				  				<div class="clearfix"></div>
				  				<?php get_template_part('home-details/insight','one')?>
				  				<div class="clearfix"></div>
				  				<?php get_template_part('home-details/insight','two')?>
				  				
				  				<div class="clearfix"></div>
				  				<?php the_field('consultation_button_insight')?>
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-eight">
				  		<a name="team"></a>
				  			<div class="container">
				  				<div class="senior-team row-fluid">
				  					<?php the_field('heading_team_members')?>
				  				</div>
				  				
				  				<div class="clearfix"></div>
				  				<?php get_template_part('home-details/team','members')?>				  				
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-nine">
				  			<div class="container">
				  				<div class="social"><?php the_field('home_social')?></div>
				  				
				  				<div class="social-icons">
				  					<ul>
				  						<li><a class="fb" href="<?php echo $data['facebook_link']?>" target="_blank"></a></li>
				  						<li><a class="twt" href="<?php echo $data['twitter_link']?>" target="_blank"></a></li>
				  						<li><a class="gplus" href="<?php echo $data['google_link']?>" target="_blank"></a></li>
				  					<li><a class="linkedin" href="<?php echo $data['linkedin_link']?>" target="_blank"></a></li>
				  						<li><a class="pin" href="<?php echo $data['pinterest_link']?>" target="_blank"></a></li>
				  					</ul>
				  				</div>
				  				
				  			</div>
				  		</div>
				  		
				  		
				  		
				  		
				  	<div class="clearfix"></div>	
				    	
					<?php endwhile;?>
				<?php 
				//pagination
				defaulttheme_content_nav( 'nav-below' ); ?>
			<!-- </div> --> <!-- end container -->
		<?php else : ?>
			<?php get_template_part('not', 'found')?>	
		<?php endif; // end have_posts() check ?>
		
	</div>
</div>
<?php get_footer();?>