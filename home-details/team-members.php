
<?php if(get_field('home_senior_team_members')):?>
<div class="row-fluid team-member">	
		<?php $count=1;?>			  					
		<?php while(has_sub_field('home_senior_team_members')):?>
				  					
					<div class="<?php echo 'col' .$count?> span4">
						<a href="<?php echo get_sub_field('member_url')?>"><div class="team-member-photo"><img src="<?php echo get_sub_field('team_photo')?>" alt="<?php echo get_sub_field('team_name')?>" class="aligncenter"></div>
						<p class="lead"><?php echo get_sub_field('team_name')?></p></a>
						<div class="team-member-details">
							<p><?php echo get_sub_field('team_position')?></p>
						</div>
						<div class="social-details">
							<ul>
								<li><a href="<?php echo get_sub_field('team_email')?>" target="_blank"><i class="fa fa-envelope"></i></a></li>
								<li><a href="<?php echo get_sub_field('team_linkedin')?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				  	
				  	<?php $count++;?>
			<?php endwhile; ?>  	
				  	
</div> <!-- end row-fluid -->	  		
<?php endif;?>
				  				

				  									  					

