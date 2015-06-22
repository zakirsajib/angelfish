<?php if(get_field('home_inbound_marketing')):?>
<div class="inbound-mrk-icons offset1">
	<?php while(has_sub_field('home_inbound_marketing')):?>			  					
		<div class="span2">
			<a href="<?php echo get_sub_field('url_inbound')?>"><div class="email-mrkt"><img src="<?php echo get_sub_field('icon_inbound')?>" alt="<?php echo get_sub_field('title_inbound')?>" class="aligncenter"></div>
			<p class="lead"><?php echo get_sub_field('title_inbound')?></p></a>
		</div>
	<?php endwhile; ?>				
</div>
<?php endif;?>