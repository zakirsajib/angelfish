<?php if(get_field('row_one_insight')):?>
<div class="row-fluid insight-row-one">
	<?php while(has_sub_field('row_one_insight')):?>
		<div class="span6">
			<a href="<?php echo get_sub_field('url_one')?>"><div class="customer-insight-icon"><img src="<?php echo get_sub_field('icon_one')?>" alt="<?php echo get_sub_field('title_insight')?>" class="aligncenter"></div>
			<p class="lead"><?php echo get_sub_field('title_insight')?></p></a>
		</div>
	<?php endwhile; ?>
</div>
<?php endif;?>