<?php 

get_header();
?>

<div class="home-container row-fluid">
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	  	<?php if ( have_posts() ) : ?>
			  <!-- <div class="container"> -->
				  	<?php while(have_posts()) : the_post();?>
				  		<?php get_template_part('includes/slideshow');?>
				  		
				  		<div class="row-fluid" id="section-one">
				  			<div class="container">
				  				<div class="free-download row-fluid">
				  					<div class="span9 mobile-freedownload">
				  						<div class="lead span2"><span style="font-weight:900; text-transform:uppercase;">Free</span><br/>Download</div>
				  				
				  					<div class="span3">
				  						<div class="free-ebook">
				  						<img src="<?php echo get_template_directory_uri(); ?>/images/free-download-ebook-three.png" alt=""></div>
				  					</div>
				  					
				  					<div class="span7 free-download-msg">
				  						<p class="lead">25 Website Must-Haves for Driving Traffic, Leads & Sales from your website.</p></div>
				  					
				  				
				  				</div> <!-- end span9 -->
				  				
				  				<div class="free-ebook-download-btn span3">
				  					<div class="download-btn">
				  							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/download-btn-green.png" alt="Download our 25 Website Must-Haves for Driving Traffic, Leads & Sales from your website"></a>
				  					</div>
				  				</div> <!-- end span2 -->
				  				
				  				</div> <!-- end free-download -->
				  				
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-two">
				  			<div class="container">
				  				<div class="inbound">
				  					<p class="lead">Angelfish is a full service inbound marketing agency.</p>
				  					<div class="inbound-text">
				  						<p>Designed to fuse inbound digital marketing with insight and intelligent web design to give you the ingredients for business success.</p>
				  						<p>Our team’s collective 35 years of client side brand management and market research agency experience, ensures we understand customers and have the power to help understand yours!</p>
				  						<p>We discover, design and deliver your inbound digital marketing.</p>
				  					</div>
				  				</div>
				  			</div>
				  			<div class="arrow do-arrow1"></div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-three">
				  			<div class="container">
				  				<div class="icons-panel">
				  					
				  					<div class="span4">
				  						<a href="#"><div class="web-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/web-icon.png" alt="Angelfish Web Design"></div>
				  						<p class="lead">Web Design</p></a>
				  					</div>
				  					
				  					<div class="span4">
				  						<a href="#"><div class="web-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/inbound-icon.png" alt="Angelfish Inbound Marketing"></div>
				  						<p class="lead">Inbound Marketing</p></a>
				  					</div>
				  					
				  					<div class="span4">
				  						<a href="#"><div class="web-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/insight-icon.png" alt="Angelfish Customer Insight"></div>
				  						<p class="lead">Customer Insight</p></a>
				  					</div>
				  					
				  					<div class="clearfix"></div>
				  					<div class="request-consultation">
				  					<a href="#"><img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/request-consultation-green.png" alt="Request a consultation"></a>
				  				</div>
				  				</div>
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-four">
				  			<div class="container">
				  				<div class="web-design">
				  					<img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/laptop.png" alt="">
				  				
				  				<h1>Web Design & Branding</h1>
				  				<p>We build beautiful, mouth watering brands and powerful, easy to use, lead generating websites.</p>
				  				<p>Our web design services not only give you attractive websites, but also focus on how your website functions and delivers a return to your business</p>
				  				
				  				<p>We use our inbound marketing skills to make sure your website is set up right from the start to give you great SEO coverage and ensure your site is geared to creating a customer journey that ultimately ends in a customer enquiry for your team.</p>
				  				
				  				<p>What does it really take to have a great website that drives visitors, leads and revenue?</p>
				  				
				  				<div class="request-consultation">
				  					<a href="#"><img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/request-consultation.png" alt="Request a consultation"></a>
				  				</div>
				  				</div>
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-five">
				  			<div class="container">
				  				<div class="download-ebook row-fluid">
				  					<div class="span7 left-col offset1">
				  						<div class="span6 book">
				  						<img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/book-one.png" alt="">
				  						</div>
				  						<div class="span6">
				  							
				  							<div class="download-texts">
				  							<div class="download-title">Download our</div>
				  								<h2>25 Website Must-Haves for Driving Traffic, Leads & Sales from your website.</h2></div>
				  						<div class="download-btn">
				  							<a href="#"><img class="alignleft" id="mobile-align" src="<?php echo get_template_directory_uri(); ?>/images/download-btn.png" alt="Download our 25 Website Must-Haves for Driving Traffic, Leads & Sales from your website"></a></div>
				  						</div>
				  					</div>
				  					
				  					<div class="span4 right-col">
				  						
				  						<div class="right-col-contents">
				  						<img src="<?php echo get_template_directory_uri(); ?>/images/untitled-one.png" alt="">
				  						<p>Want to talk to one of our team about building your next website?</p>
				  						</div>
				  						
				  						
				  						<div class="clearfix"></div>
				  						<div class="request-consultation">
				  							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/request-consultation-white.png" alt="Request a consultation"></a>
				  					</div>
				  						
				  					</div>
				  					
				  				</div> <!-- end download-ebook -->
				  			</div> <!-- end container -->
				  			
				  			<div class="arrow do-arrow1"></div>
				  			
				  		</div> <!-- end row-fluid -->
				  		
				  		<div class="row-fluid" id="section-six">
				  			<div class="container">
				  				<div class="inbound-mrk row-fluid">
				  					<h1>Inbound Marketing</h1>
				  					<p>We make your website work and help support your sales with critical leads through intelligent automation and customer journey direction.</p>
				  					<p>We specialise in the development of powerful inbound campaigns that will transform your marketing.</p>
				  					<p>Download our top 30 tips on lead generation for your business <a href="http://hsb1.hubspot.com/hs-fs/hub/53/file-9974504-pdf/00-OFFERS-HIDDEN/30-Lead-Generation-Tips-Ebook-Final.pdf" target="_blank">here:</a></p>
				  				</div>
				  				
				  				
				  				<div class="inbound-mrk-icons row-fluid">
				  					
				  					<div class="span2 offset1">
				  						<a href="#"><div class="email-mrkt"><img src="<?php echo get_template_directory_uri(); ?>/images/email-mrkt.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Email Marketing</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="email-mrkt"><img src="<?php echo get_template_directory_uri(); ?>/images/landing-icon.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Landing pages & powerful forms</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="email-mrkt"><img src="<?php echo get_template_directory_uri(); ?>/images/content-icon.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Content creation & blogging</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="email-mrkt"><img src="<?php echo get_template_directory_uri(); ?>/images/ppc-icon.png" alt="" class="aligncenter"></div>
				  						<p class="lead">SEO & PPC</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="email-mrkt"><img src="<?php echo get_template_directory_uri(); ?>/images/strategy-icon.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Inbound strategic planning</p></a>
				  					</div>
				  				
				  				</div>
				  				
				  				<div class="clearfix"></div>
				  					
				  					<h5>Want to speak to an expert?</h5>
				  					<div class="request-consultation">
				  					<a href="#"><img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/request-consultation-green.png" alt="Request a consultation"></a></div>
				  					
				  					
				  				
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-seven">
				  			<div class="container">
				  				<div class="customer-insight row-fluid">
				  					<h1>Customer Insight</h1>
				  					<p>We help you understand your customers.</p>
				  					<p>With 35 years experience in the market research sector, we can power your surveys, focus groups and build you customer communities so you can tap into your audiences thoughts anytime!</p>
				  				</div>
				  				
				  				<div class="clearfix"></div>
				  				
				  				<div class="row-fluid insight-row-one">
				  					<div class="span6">
				  						<a href="#"><div class="customer-insight-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/why-focus-groups-s.png" alt="Why conduct focus groups?" class="aligncenter"></div>
				  						<p class="lead">Why conduct focus groups?</p></a>
				  					</div>
				  					<div class="span6">
				  						<a href="#"><div class="customer-insight-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/why-online-s.png" alt="Why conduct an online community?" class="aligncenter"></div>
				  						<p class="lead">Why conduct an online community?</p></a>
				  					</div>
				  				</div>
				  				
				  				<div class="clearfix"></div>
				  				
				  				<div class="insight-row-two row-fluid">
				  					<div class="span2 offset1">
				  						<a href="#"><div class="customer-insight-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/web-usability.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Web Usability testing</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="customer-insight-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/why-online-s.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Online Communities</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="customer-insight-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/why-focus-groups-s.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Focus Groups</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="customer-insight-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/online-surveys.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Online Surveys</p></a>
				  					</div>
				  					<div class="span2">
				  						<a href="#"><div class="customer-insight-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/participants.png" alt="" class="aligncenter"></div>
				  						<p class="lead">Participants for your research</p></a>
				  					</div>
				  				</div> <!-- end row-two -->
				  				
				  				<div class="clearfix"></div>
				  				
				  				<div class="request-consultation">
				  					<a href="#"><img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/images/request-consultation.png" alt="Request a consultation"></a>
				  				</div>
				  				
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-eight">
				  			<div class="container">
				  				<div class="senior-team row-fluid">
				  					<h5>Meet the senior team</h5>
				  					<p>Cras mattis consectetur purus sit amet fermentum. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum.</p>
				  				</div>
				  				
				  				<div class="clearfix"></div>
				  				
				  				<?php get_template_part('home-details/team','members')?>				  				
				  				
				  				
				  			</div>
				  		</div>
				  		
				  		<div class="row-fluid" id="section-nine">
				  			<div class="container">
				  				<div class="social">
				  					<h5>Let's Be Social</h5>
				  					<p>Join our growing social communities to learn more about the
beneﬁts of inbound marketing and the people who make us tick.</p>
				  				</div>
				  				
				  				<div class="social-icons">
				  					<ul>
				  						<li><a class="fb" href=""></a></li>
				  						<li><a class="twt" href=""></a></li>
				  						<li><a class="gplus" href=""></a></li>
				  						<li><a class="linkedin" href=""></a></li>
				  						<li><a class="pin" href=""></a></li>
				  					</ul>
				  				</div>
				  				
				  			</div>
				  		</div>
				  		
				  		
				  		
				  		
				  		
				    	<?php the_content();?>
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