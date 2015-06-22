<?php 


//////////////////////////////////////////////////////////////////////////
// Create Your Own WordPress Login Page /////////////////////////////////
// Reference: http://www.paulund.co.uk/create-your-own-wordpress-login-page	
/////////////////////////////////////////////////////////////////////////




// Download button Brown background
// Example code: [downloadbrownbackground link="#" alt="" align="alignleft"][/downloadbrownbackground]


function download_brown_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="download-btn" id="download-brown-bg"><a href="'.$link.'"><span><img class="'.$align.'" src="'.get_template_directory_uri().'/images/download-btn-green.png" alt="'.$alt.'"></span></a></div>';
   
}
add_shortcode('downloadbrownbackground', 'download_brown_background');



// Download button Green background
// Example code: [downloadgreenbackground link="#" alt="" align="alignleft"][/downloadgreenbackground]

function download_green_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="download-btn" id="download-green-bg"><a href="'.$link.'"><span><img class="'.$align.'" src="'.get_template_directory_uri().'/images/download-btn.png" alt="'.$alt.'"></span></a></div>';
   
}
add_shortcode('downloadgreenbackground', 'download_green_background');



// Download button White background
// Example code: [downloadwhitebackground link="#" alt="" align="alignleft"][/downloadwhitebackground]

function download_white_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="download-btn" id="download-white-bg"><a href="'.$link.'"><span><img class="'.$align.'" src="'.get_template_directory_uri().'/images/download-btn-green-black.png" alt="'.$alt.'"></span></a></div>';
   
}
add_shortcode('downloadwhitebackground', 'download_white_background');








// Request a consultation Brown background
// Example code: [reqconbrownbackground link="#" alt="Request a consultation"][/reqconbrownbackground]

function req_brown_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="request-consultation"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/request-consultation.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('reqconbrownbackground', 'req_brown_background');


// Request a consultation White background
// Example code: [reqconwhitebackground link="#" alt="Request a consultation" align="aligncenter"][/reqconwhitebackground]

function req_white_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="request-consultation"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/request-consultation-green.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('reqconwhitebackground', 'req_white_background');

// Request a consultation Green background
// Example code: [reqcongreenbackground link="#" alt="Request a consultation"][/reqcongreenbackground]

function req_green_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="request-consultation" id="consultation-green-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/request-consultation-white.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('reqcongreenbackground', 'req_green_background');






// Learn more button
// White background
// Example code: [learnwhitebackground link="#" alt="Learn more" align="alignright"][/learnwhitebackground]

function learn_white_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="learn-consultation" id="learn-white-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/learn-white-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('learnwhitebackground', 'learn_white_background');


// Green background
// Example code: [learngreenbackground link="#" alt="Learn more" align="alignright"][/learngreenbackground]

function learn_green_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="learn-consultation" id="learn-green-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/learn-green-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('learngreenbackground', 'learn_green_background');



// Brown background
// Example code: [learnbrownbackground link="#" alt="Learn more" align="alignright"][/learnbrownbackground]

function learn_brown_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="learn-consultation" id="learn-brown-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/learn-brown-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('learnbrownbackground', 'learn_brown_background');







// Read our blog button
// White background
// Example code: [readwhitebackground link="#" alt="Learn more" align="alignright"][/readwhitebackground]

function read_white_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="read-blog" id="read-white-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/read-white-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('readwhitebackground', 'read_white_background');


// Read our blog button
// Brown background
// Example code: [readbrownbackground link="#" alt="Learn more" align="alignright"][/readbrownbackground]

function read_brown_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="read-blog" id="read-brown-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/read-brown-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('readbrownbackground', 'read_brown_background');


// Read our blog button
// Green background
// Example code: [readgreenbackground link="#" alt="Learn more" align="alignright"][/readgreenbackground]

function read_green_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="read-blog" id="read-green-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/read-green-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('readgreenbackground', 'read_green_background');




// Request a quote button
// White background
// Example code: [quotewhitebackground link="#" alt="Learn more" align="alignright"][/quotewhitebackground]

function quote_white_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="quote-blog" id="quote-white-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/quote-white-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('quotewhitebackground', 'quote_white_background');


// Brown background
// Example code: [quotebrownbackground link="#" alt="Learn more" align="alignright"][/quotebrownbackground]

function quote_brown_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="quote-blog" id="quote-brown-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/quote-brown-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('quotebrownbackground', 'quote_brown_background');



// Green background
// Example code: [quotegreenbackground link="#" alt="Learn more" align="alignright"][/quotegreenbackground]

function quote_green_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="quote-blog" id="quote-green-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/quote-green-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('quotegreenbackground', 'quote_green_background');




// Submit button
// White background
// Example code: [submitwhitebackground link="#" alt="Learn more" align="aligncenter"][/submitwhitebackground]

function submit_white_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="submit-blog" id="submit-white-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/submit-white-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('submitwhitebackground', 'submit_white_background');


// Brown background
// Example code: [submitbrownbackground link="#" alt="Learn more" align="aligncenter"][/submitbrownbackground]

function submit_brown_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="submit-blog" id="submit-brown-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/submit-brown-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('submitbrownbackground', 'submit_brown_background');

// Green background
// Example code: [submitgreenbackground link="#" alt="Learn more" align="aligncenter"][/submitgreenbackground]

function submit_green_background($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#',
   								'alt'	=> '',
   								'align' =>''
   ), $atts));
   
   return '<div class="submit-blog" id="submit-green-bg"><a href="'.$link.'"><span><img src="'.get_template_directory_uri().'/images/submit-green-bg.png" alt="'.$alt.'" class="'.$align.'"></span></a></div>';
}
add_shortcode('submitgreenbackground', 'submit_green_background');




?>