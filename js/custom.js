$j = jQuery.noConflict();		
		$j( document ).ready(function() {	
		  
				if ($j.browser.msie && $j.browser.version == 10) {
				  	$j("html").addClass("ie10");
				}
				
				
			$j(window).scroll(function() {
				if ($j(this).scrollTop() > 200) {
					$j('.go-top').fadeIn(200);
				} else {
					$j('.go-top').fadeOut(200);
				}
				
				var y = $j(this).scrollTop();
				//document.title ='top=' + y; // debug
				
				if(y >=1 && y<=135){
					$j('.inbound').addClass('animated slideInUp');
					$j('.icons-panel').removeClass('animated slideInLeft');
				}
				
				if(y >= 135 && y<=425){
					$j('.inbound').removeClass('animated slideInUp');
					$j('.icons-panel').addClass('animated slideInLeft');
				}
				
			})
			
			$j('.go-top').click(function(event) {
				event.preventDefault();
				
				$j('html, body').animate({scrollTop: 0}, 1000);
			})
			
			$j('.angelfish-menu #main-menu > li > a[href*=#]').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var $target = $j(this.hash);
				$target = $target.length && $target || $j('[name=' + this.hash.slice(1) +']');
				if ($target.length) {
					var targetOffset = $target.offset().top;
					targetOffset = targetOffset - 0;
				
					$j('html,body').animate({scrollTop: targetOffset}, 1000);
					return false;
				}
			}
		});
});
