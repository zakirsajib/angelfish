<?php if(get_field('row_two_insight')):?>
<div class="insight-row-two offset1">
	<?php while(has_sub_field('row_two_insight')):?>
		<div class="span2">
			<a href="<?php echo get_sub_field('url_two')?>"><div class="customer-insight-icon"><img src="<?php echo get_sub_field('icon_two')?>" alt="<?php echo get_sub_field('title_insight_two')?>" class="aligncenter"></div>
			<p class="lead"><?php echo get_sub_field('title_insight_two')?></p></a>
		</div>
	<?php endwhile; ?>
</div>
<?php endif;?>