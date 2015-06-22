<?php global $data; ?>


<style>

@media screen and (min-width: 1200px) {

body{
	background-color: <?php echo $data['body_background']?>;
	color: <?php echo $data['body_font_color']?>;
	line-height: <?php echo $data['body_font_line']?>
}

.header-wrapper{
	background-color: <?php echo $data['header_background']?>;
}

a{
	color: <?php echo $data['link_color']?>;
}
a:hover{
	color: <?php echo $data['link_hover_color']?>;
}

p{
	font-size: <?php echo $data['body_font_size']?>;
	font-weight: <?php echo $data['body_font_weight']?>;
}


h1{
	color: <?php echo $data['h1_color']?>;
	font-size: <?php echo $data['h1_title_size']?>;
	line-height: <?php echo $data['h1_line_height']?>;
	font-weight: <?php echo $data['h1_font_weight']?>;
}
h2{
	color: <?php echo $data['h2_color']?>;
	font-size: <?php echo $data['h2_title_size']?>;
	line-height: <?php echo $data['h2_line_height']?>;
	font-weight: <?php echo $data['h2_font_weight']?>;
}
h3{
	color: <?php echo $data['h3_color']?>;
	font-size: <?php echo $data['h3_title_size']?>;
	line-height: <?php echo $data['h3_line_height']?>;
	font-weight: <?php echo $data['h3_font_weight']?>;
}
h4{
	color: <?php echo $data['h4_color']?>;
	font-size: <?php echo $data['h4_title_size']?>;
	line-height: <?php echo $data['h4_line_height']?>;
	font-weight: <?php echo $data['h4_font_weight']?>;
}
h5{
	color: <?php echo $data['h5_color']?>;
	font-size: <?php echo $data['h5_title_size']?>;
	line-height: <?php echo $data['h5_line_height']?>;
	font-weight: <?php echo $data['h5_font_weight']?>;
}

h6{
	color: <?php echo $data['h6_color']?>;
	font-size: <?php echo $data['h6_title_size']?>;
	line-height: <?php echo $data['h6_line_height']?>;
	font-weight: <?php echo $data['h6_font_weight']?>;
}

.angelfish-menu #main-menu > li{
	line-height: <?php echo $data['menu_font_line']?>;
}

.angelfish-menu #main-menu > li > a{
	font-size: <?php echo $data['menu_font_size']?>;
	color: <?php echo $data['menu_font_color']?>;
	font-weight: <?php echo $data['menu_font_weight']?>;
}

.angelfish-menu #main-menu > li > a:focus, 
.angelfish-menu #main-menu > li > a:hover{
	color: <?php echo $data['menu_font_hover_color']?>;
}

.angelfish-menu #main-menu > li.current-menu-item a, 
.angelfish-menu #main-menu > li.current_page_item a{
	color: <?php echo $data['menu_active_color']?>;
}


.footer{
	background-color: <?php echo $data['footer_background']?>;
}

.copyright{
	color: <?php echo $data['footer_font_color']?>;
	font-size: <?php echo $data['footer_size']?>;
	font-weight: <?php echo $data['footer_font_weight']?>;
}

.footer-menu a{
	color: <?php echo $data['footer_font_color']?>;
	font-weight: <?php echo $data['footer_font_weight']?>;
}

.footer-menu a:hover{
	color: <?php echo $data['footer_font_hover_color']?>;
}



/*Custom CSS*/
<?php echo $data['custom_css']?>

}/*end media screen*/

</style>