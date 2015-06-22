<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) | !(IE 9) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	
	<?php global $data; ?>
	
	
	<?php if($data['favicon']): ?>
	<link rel="shortcut icon" href="<?php echo $data['favicon']; ?>" type="image/x-icon" />
	<?php endif; ?>
	
	
	<?php if($data['iphone_icon']): ?>
	<!-- For iPhone -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo $data['iphone_icon']; ?>">
	<?php endif; ?>

	<?php if($data['iphone_icon_retina']): ?>
	<!-- For iPhone 4 Retina display -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $data['iphone_icon_retina']; ?>">
	<?php endif; ?>

	<?php if($data['ipad_icon']): ?>
	<!-- For iPad -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $data['ipad_icon']; ?>">
	<?php endif; ?>

	<?php if($data['ipad_icon_retina']): ?>
	<!-- For iPad Retina display -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $data['ipad_icon_retina']; ?>">
	<?php endif; ?>
	
	
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    	<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


<?php wp_head();?>
<?php echo $data['space_head']; ?>

<script src="//use.typekit.net/wmt7vue.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<?php get_template_part('css/custom', 'style');?>
</head>
		
<body <?php body_class(); ?>>
<a name="top"></a>

<div class="header-wrapper row-fluid" style="margin-top:<?php echo $data['margin_header_top']; ?>;margin-bottom:<?php echo $data['margin_header_bottom']; ?>;"> 
  	<div class="container">	
		<div class="row-fluid">
			<div class="logo" style="margin-right:<?php echo $data['margin_logo_right']; ?>;margin-top:<?php echo $data['margin_logo_top']; ?>;margin-left:<?php echo $data['margin_logo_left']; ?>;margin-bottom:<?php echo $data['margin_logo_bottom']; ?>;">
					<a href="<?php echo home_url();?>" title="Click here to go to home page">
					<img src="<?php echo $data['upload_logo']; ?>" alt="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>"/>
					<?php if($data['logo_retina'] && $data['retina_logo_width'] && $data['retina_logo_height']): ?>
						<img src="<?php echo $data["logo_retina"]; ?>" alt="<?php bloginfo('name'); ?>" style="width:<?php echo $data["retina_logo_width"]; ?>px;height:<?php echo $data["retina_logo_height"]; ?>px;" class="retina_logo" />
					<?php endif; ?>
					</a>
			</div> <!-- end logo -->
  		</div><!-- end row-fluid -->
 		
 		 		
 			<div class="row-fluid">
 			<div class="menu-socialmedia">
					<?php wp_nav_menu( array( 
						'menu' => 'main-menu',
						'theme_location' => 'Primary', 
						'menu_id' => 'main-menu', 
						'menu_class' => 'nav', 
						'container_id' =>'',
						'container_class' =>'angelfish-menu',
						'fallback_cb' => 'wp_page_menu'
				));?>
				
				
				<div class="social-media">
					<ul>
						<li><a href="mailto:<?php echo $data['email_link']?>"><i class="fa fa-envelope"></i></a></li>
						<li><a href="<?php echo $data['twitter_link']?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $data['facebook_link']?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
					</ul>
				</div>	
			</div> <!-- end  menu-socialmedia-->	
  		</div> <!-- end row-fluid -->
  </div> <!-- container -->
</div> <!-- header wrapper -->