<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/admin/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/admin/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		            	natsort($bg_images); //Sorts the array into a natural order
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();


// General Settings

$of_options[] = array( 	"name" 		=> "General Settings",
						"type" 		=> "heading"
				);


$of_options[] = array( 	"name" 		=> "Favicon",
						"desc" 		=> "You can put url of an ico image that will represent your website's favicon (16px x 16px).",
						"id" 		=> "favicon",
						// Use the shortcodes [site_url] or [site_url_secure] for setting default URLs
						"std" 		=> "",
						"type" 		=> "upload"
				);

$of_options[] = array( "name" => "Apple iPhone Icon Upload",
					"desc" => "Icon for Apple iPhone (57px x 57px)",
					"id" => "iphone_icon",
					"std" => "",
					"type" => "upload");

$of_options[] = array( "name" => "Apple iPhone Retina Icon Upload",
					"desc" => "Icon for Apple iPhone Retina Version (114px x 114px)",
					"id" => "iphone_icon_retina",
					"std" => "",
					"type" => "upload");

$of_options[] = array( "name" => "Apple iPad Icon Upload",
					"desc" => "Icon for Apple iPhone (72px x 72px)",
					"id" => "ipad_icon",
					"std" => "",
					"type" => "upload");

$of_options[] = array( "name" => "Apple iPad Retina Icon Upload",
					"desc" => "Icon for Apple iPad Retina Version (144px x 144px)",
					"id" => "ipad_icon_retina",
					"std" => "",
					"type" => "upload");


				
$of_options[] = array( 	"name" 		=> "Tracking Code",
						"desc" 		=> "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
						"id" 		=> "google_analytics",
						"std" 		=> "",
						"type" 		=> "textarea"
				);
$of_options[] = array( "name" => "Space before &lt;/head&gt;",
					"desc" => "Add code before the &lt;/head&gt; tag.",
					"id" => "space_head",
					"std" => "",
					"type" => "textarea");

$of_options[] = array( "name" => "Space before &lt;/body&gt;",
					"desc" => "Add code before the &lt;/body&gt; tag.",
					"id" => "space_body",
					"std" => "",
					"type" => "textarea");
				
				

// Header Settings

$of_options[] = array( 	"name" 		=> "Header Settings",
						"type" 		=> "heading"
				);

$of_options[] = array( "name" => "Header Top Margin",
					"desc" => "(in pixels)",
					"id" => "margin_header_top",
					"std" => "0px",
					"type" => "text");

$of_options[] = array( "name" => "Header Bottom Margin",
					"desc" => "(in pixels)",
					"id" => "margin_header_bottom",
					"std" => "0px",
					"type" => "text");



$of_options[] = array( 	"name" 		=> "Logo",
						"desc" 		=> "Upload logo.",
						"id" 		=> "upload_logo",
						// Use the shortcodes [site_url] or [site_url_secure] for setting default URLs
						"std" 		=> get_bloginfo('template_directory')."/images/logo.png",
						"type" 		=> "upload"
				);

$of_options[] = array( "name" => "Logo (Retina Version @2x)",
					"desc" => "Please choose an image file for the retina version of the logo. It should be 2x the size of main logo.",
					"id" => "logo_retina",
					"std" => "",
					"mod" => "",
					"type" => "media");

$of_options[] = array( "name" => "Standard Logo Width for Retina Logo",
					"desc" => "If retina logo is uploaded, please enter the standard logo (1x) version width, do not enter the retina logo width.",
					"id" => "retina_logo_width",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Standard Logo Height for Retina Logo",
					"desc" => "If retina logo is uploaded, please enter the standard logo (1x) version height, do not enter the retina logo height.",
					"id" => "retina_logo_height",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Logo Left Margin",
					"desc" => "(in pixels)",
					"id" => "margin_logo_left",
					"std" => "0px",
					"type" => "text");

$of_options[] = array( "name" => "Logo Right Margin",
					"desc" => "(in pixels)",
					"id" => "margin_logo_right",
					"std" => "0px",
					"type" => "text");

$of_options[] = array( "name" => "Logo Top Margin",
					"desc" => "(in pixels)",
					"id" => "margin_logo_top",
					"std" => "30px",
					"type" => "text");

$of_options[] = array( "name" => "Logo Bottom Margin",
					"desc" => "(in pixels)",
					"id" => "margin_logo_bottom",
					"std" => "30px",
					"type" => "text");
				
					
					
// Home Settings					

$of_options[] = array( 	"name" 		=> "Home Settings",
						"type" 		=> "heading"
				);

$of_options[] = array( "name" => "Home Slideshow Options",
					"desc" => "",
					"id" => "home_slideshow_options",
					"std" => "<h3 style='margin: 0;'>Home Slideshow Options</h3>",
					"icon" => true,
					"type" => "info");
					

$of_options[] = array( "name" => "Autoplay",
					"desc" => "Autoplay the slideshow",
					"id" => "autoplay_slideshow",
					"std" => 1,
					"type" => "checkbox");

$of_options[] = array( "name" => "Pagination",
					"desc" => "Show pager, true or false",
					"id" => "pagination_slideshow",
					"std" => 0,
					"type" => "checkbox");

$of_options[] = array( "name" => "Navigation",
					"desc" => "Show navigation, true or false",
					"id" => "navigation_slideshow",
					"std" => 0,
					"type" => "checkbox");

$of_options[] = array( "name" => "Timeout",
					"desc" => "Time between slide transitions, in milliseconds",
					"id" => "timeout_slideshow",
					"std" => 4000,
					"type" => "text");

$of_options[] = array( "name" => "Speed",
					"desc" => "Speed of the transition, in milliseconds",
					"id" => "speed_slideshow",
					"std" => 500,
					"type" => "text");

$of_options[] = array( "name" => "Home Section Options",
					"desc" => "",
					"id" => "home_section_options",
					"std" => "<h3 style='margin: 0;'>Home Section Options</h3>",
					"icon" => true,
					"type" => "info");


// Typography options

$of_options[] = array( 	"name" 		=> "Typography Options",
						"type" 		=> "heading"
				);

$of_options[] = array( 	"name" 		=> "Body Font Size (em)",
						"desc" 		=> "Specify the body font size <br/>(default: 1em; [16px equals to 1em]).",
						"id" 		=> "body_font_size",
						"std" 		=> "1em",
						"type" 		=> "text"
				);  
$of_options[] = array( 	"name" 		=> "Body Font Line Height (px)",
						"desc" 		=> "Specify the body font line height",
						"id" 		=> "body_font_line",
						"std" 		=> "",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "Body Font Weight",
						"desc" 		=> "Specify the body font weight <br/> default: 500.",
						"id" 		=> "body_font_weight",
						"std" 		=> "500",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  



$of_options[] = array( "name" => "Menu Style Options",
					"desc" => "",
					"id" => "menu_options",
					"std" => "<h3 style='margin: 0;'>Menu Style Options</h3>",
					"icon" => true,
					"type" => "info");


$of_options[] = array( 	"name" 		=> "Menu Font Size (em)",
						"desc" 		=> "Specify the menu font size <br/>(default: 0.750em; [12px equals to 0.750em]).",
						"id" 		=> "menu_font_size",
						"std" 		=> "0.750em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "Menu Font Weight",
						"desc" 		=> "Specify the menu font weight <br/> default: 500.",
						"id" 		=> "menu_font_weight",
						"std" 		=> "500",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  



$of_options[] = array( 	"name" 		=> "Menu Font Line Height",
						"desc" 		=> "Specify the menu font line height (default: 1).",
						"id" 		=> "menu_font_line",
						"std" 		=> "1",
						"type" 		=> "text"
				);  

$of_options[] = array( "name" => "Heading Font Style Options",
					"desc" => "",
					"id" => "h_tags_options",
					"std" => "<h3 style='margin: 0;'>Heading Font Options</h3>",
					"icon" => true,
					"type" => "info"
				);

$of_options[] = array( 	"name" 		=> "H1 Title Font Size (em)",
						"desc" 		=> "Specify the h1 title font size <br/>(default: 2.125em [ 34px equals to 2.125em]).",
						"id" 		=> "h1_title_size",
						"std" 		=> "2.125em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "H1 Font Weight",
						"desc" 		=> "Specify the h1 font weight <br/> default: 300.",
						"id" 		=> "h1_font_weight",
						"std" 		=> "300",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  


$of_options[] = array( 	"name" 		=> "H1 Line Height (px)",
						"desc" 		=> "Specify the h1 line height <br/> default: 40px.",
						"id" 		=> "h1_line_height",
						"std" 		=> "40px",
						"type" 		=> "text"
				);  


$of_options[] = array( 	"name" 		=> "H2 Title Font Size (em)",
						"desc" 		=> "Specify the h2 title font size <br/>(default: 2em [ 32px equals to 2em]).",
						"id" 		=> "h2_title_size",
						"std" 		=> "2em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "H2 Font Weight",
						"desc" 		=> "Specify the h2 font weight <br/> default: 300.",
						"id" 		=> "h2_font_weight",
						"std" 		=> "300",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  

$of_options[] = array( 	"name" 		=> "H2 Line Height (px)",
						"desc" 		=> "Specify the h2 line height <br/> default: 40px.",
						"id" 		=> "h2_line_height",
						"std" 		=> "40px",
						"type" 		=> "text"
				);  


$of_options[] = array( 	"name" 		=> "H3 Title Font Size (em)",
						"desc" 		=> "Specify the h3 title font size <br/>(default: 1.875em [ 30px equals to 1.875em]).",
						"id" 		=> "h3_title_size",
						"std" 		=> "1.875em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "H3 Font Weight",
						"desc" 		=> "Specify the h3 font weight <br/> default: 300.",
						"id" 		=> "h3_font_weight",
						"std" 		=> "300",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  

$of_options[] = array( 	"name" 		=> "H3 Line Height (px)",
						"desc" 		=> "Specify the h3 line height <br/> default: 40px.",
						"id" 		=> "h3_line_height",
						"std" 		=> "40px",
						"type" 		=> "text"
				);  


$of_options[] = array( 	"name" 		=> "H4 Title Font Size (em)",
						"desc" 		=> "Specify the h4 title font size <br/>(default: 1.500em [ 28px equals to 1.750em]).",
						"id" 		=> "h4_title_size",
						"std" 		=> "1.750em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "H4 Font Weight",
						"desc" 		=> "Specify the h4 font weight <br/> default: 300.",
						"id" 		=> "h4_font_weight",
						"std" 		=> "300",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  


$of_options[] = array( 	"name" 		=> "H4 Line Height (px)",
						"desc" 		=> "Specify the h4 line height <br/> default: 20px.",
						"id" 		=> "h4_line_height",
						"std" 		=> "20px",
						"type" 		=> "text"
				);  


$of_options[] = array( 	"name" 		=> "H5 Title Font Size (em)",
						"desc" 		=> "Specify the h5 title font size <br/>(default: 1.625em [ 26px equals to 1.625em]).",
						"id" 		=> "h5_title_size",
						"std" 		=> "1.625em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "H5 Font Weight",
						"desc" 		=> "Specify the h5 font weight <br/> default: 300.",
						"id" 		=> "h5_font_weight",
						"std" 		=> "300",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  

$of_options[] = array( 	"name" 		=> "H5 Line Height (px)",
						"desc" 		=> "Specify the h5 line height <br/> default: 20px.",
						"id" 		=> "h5_line_height",
						"std" 		=> "20px",
						"type" 		=> "text"
				);  


$of_options[] = array( 	"name" 		=> "H6 Title Font Size (em)",
						"desc" 		=> "Specify the h6 title font size <br/>(default: 1.5em [ 26px equals to 1.5em]).",
						"id" 		=> "h6_title_size",
						"std" 		=> "1.5em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "H6 Font Weight",
						"desc" 		=> "Specify the h6 font weight <br/> default: 300.",
						"id" 		=> "h6_font_weight",
						"std" 		=> "300",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  


$of_options[] = array( 	"name" 		=> "H6 Line Height (px)",
						"desc" 		=> "Specify the h6 line height <br/> default: 20px.",
						"id" 		=> "h6_line_height",
						"std" 		=> "20px",
						"type" 		=> "text"
				);  

$of_options[] = array( "name" => "Footer Copyright Font Options",
					"desc" => "",
					"id" => "footer_options",
					"std" => "<h3 style='margin: 0;'>Footer Copyright Font Options</h3>",
					"icon" => true,
					"type" => "info"
				);

$of_options[] = array( 	"name" 		=> "Footer Font Size (em)",
						"desc" 		=> "(default: 0.75em [ 12px equals to 0.75em]).",
						"id" 		=> "footer_size",
						"std" 		=> "0.75em",
						"type" 		=> "text"
				);  

$of_options[] = array( 	"name" 		=> "Footer Font Weight",
						"desc" 		=> "Specify the footer font weight <br/> default: 300.",
						"id" 		=> "footer_font_weight",
						"std" 		=> "300",
						"type" 		=> "select",
						"options" => array('1' => '300', '2' => '500', '3' => '700', '4' => '900'),
				);  



// Styling options

$of_options[] = array( 	"name" 		=> "Styling Options",
						"type" 		=> "heading"
				);
				
				
$of_options[] = array( 	"name" 		=> "Body Background Color",
						"desc" 		=> "Pick a background color for the theme (default: #fff).",
						"id" 		=> "body_background",
						"std" 		=> "",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Header Background Color",
						"desc" 		=> "Pick a background color for the header (default: #6f6157).",
						"id" 		=> "header_background",
						"std" 		=> "#6f6157",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Footer Background Color",
						"desc" 		=> "Pick a background color for the footer (default: #ffffff).",
						"id" 		=> "footer_background",
						"std" 		=> "#ffffff",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Body Font Color",
						"desc" 		=> "Specify the body font color (default: #333333).",
						"id" 		=> "body_font_color",
						"std" 		=> "#333333",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "Footer Font Color",
						"desc" 		=> "Specify the footer font color (default: #706258).",
						"id" 		=> "footer_font_color",
						"std" 		=> "#706258",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "Footer Font Hover Color",
						"desc" 		=> "Specify the footer font hover color",
						"id" 		=> "footer_font_hover_color",
						"std" 		=> "",
						"type" 		=> "color"
				);  



$of_options[] = array( 	"name" 		=> "Link Color",
						"desc" 		=> "Specify the link color (default: #ccd615).",
						"id" 		=> "link_color",
						"std" 		=> "#ccd615",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "Link Hover Color",
						"desc" 		=> "Specify the link hover color (default: #ffffff).",
						"id" 		=> "link_hover_color",
						"std" 		=> "#ffffff",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "Menu Font Color",
						"desc" 		=> "Specify the menu font color (default: #ccd615).",
						"id" 		=> "menu_font_color",
						"std" 		=> "#ccd615",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "Menu Mouse Hover Color",
						"desc" 		=> "Specify the menu font hover color (default: #ffffff).",
						"id" 		=> "menu_font_hover_color",
						"std" 		=> "#ffffff",
						"type" 		=> "color"
				);  


$of_options[] = array( 	"name" 		=> "Menu Active Color",
						"desc" 		=> "Specify the menu active/current page color (default: #ffffff).",
						"id" 		=> "menu_active_color",
						"std" 		=> "#ffffff",
						"type" 		=> "color"
				);  


$of_options[] = array( 	"name" 		=> "H1 Color",
						"desc" 		=> "Specify the h1 color",
						"id" 		=> "h1_color",
						"std" 		=> "",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "H2 Color",
						"desc" 		=> "Specify the h2 color",
						"id" 		=> "h2_color",
						"std" 		=> "",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "H3 Color",
						"desc" 		=> "Specify the h3 color",
						"id" 		=> "h3_color",
						"std" 		=> "",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "H4 Color",
						"desc" 		=> "Specify the h4 color",
						"id" 		=> "h4_color",
						"std" 		=> "",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "H5 Color",
						"desc" 		=> "Specify the h5 color",
						"id" 		=> "h5_color",
						"std" 		=> "",
						"type" 		=> "color"
				);  

$of_options[] = array( 	"name" 		=> "H6 Color",
						"desc" 		=> "Specify the h6 color",
						"id" 		=> "h6_color",
						"std" 		=> "",
						"type" 		=> "color"
				);  




// Social sharing links

$of_options[] = array( "name" => "Social Sharing Links",
					"type" => "heading");
					
$of_options[] = array( "name" => "Facebook",
					"desc" => "Place the link you want. To remove it, just leave it blank.",
					"id" => "facebook_link",
					"std" => "",
					"type" => "text"); 

$of_options[] = array( "name" => "Twitter",
					"desc" => "Place the link you want and twitter icon will appear. To remove it, just leave it blank.",
					"id" => "twitter_link",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Pinterest",
					"desc" => "Place the link you want. To remove it, just leave it blank.",
					"id" => "pinterest_link",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Google Plus",
					"desc" => "Place the link you want. To remove it, just leave it blank.",
					"id" => "google_link",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "LinkedIn",
					"desc" => "Place the link you want. To remove it, just leave it blank.",
					"id" => "linkedin_link",
					"std" => "",
					"type" => "text");

$of_options[] = array( "name" => "Email",
					"desc" => "Place the email address you want. To remove it, just leave it blank.",
					"id" => "email_link",
					"std" => "",
					"type" => "text");

// Custom css

$of_options[] = array( "name" => "Custom CSS",
					"type" => "heading");

$of_options[] = array( "name" => "Advanced CSS Customizations",
					"desc" => "",
					"id" => "advanced_css_intro",
					"std" => "<h3 style='margin: 0;'>Advanced CSS Customizations</h3><p style='margin-bottom:0;'>Paste your css code. Do not include <stlye></stlye> tags or any html tag in this field.</p>",
					"icon" => true,
					"type" => "info");

$of_options[] = array( "name" => "CSS Code",
                    "desc" => "Any custom CSS from the user should go in this field, it will override the theme CSS",
                    "id" => "custom_css",
                    "std" => "",
                    "type" => "textarea");



				
// Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
