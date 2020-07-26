<footer class="FooterWrap TAC">
	<div class="InnerContainWrapper">

	   <div class="FooterLogo">
			<a href="./">
				<img src="images/imgs/main-logo.png" alt=" ">
			</a>
		</div> <!--FooterLogo-->

		<div class="FooterLink">
			<ul class="NoBullet">
				<li><a href="./">Home</a></li>
				<li><a href="about-us">About Us</a></li>
				<li><a href="what-we-do">What We Do </a></li>
				<li><a href="publications">Publications</a></li>
				<!--<li><a href="blog">Blog</a></li>-->
				<li><a href="contact-us"> Contact Us</a></li>
			</ul>
		</div> <!--footerlink-->

		<div class="FSocialIcon">
			<ul class="SocialIcons">
				<li>
					<a href="https://www.facebook.com/abtreecareservice" class="fa-stack fa-lg" target="_blank">			
						<i class="fa fa-circle fa-stack-2x"></i>			
						<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>			
					</a>			
				</li>
				<li> 
					<a href="#" class="fa-stack fa-lg" target="_blank"> 
						<i class="fa fa-circle fa-stack-2x"></i> 
						<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
					</a> 
				</li>
				<li>
					<a href="https://goo.gl/maps/nAXyDhYEmLhq8Lj17" class="fa-stack fa-lg" target="_blank">			
						<i class="fa fa-circle fa-stack-2x"></i>			
						<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>			
					</a>			
				</li>
			</ul>
	   </div>  <!--social icons-->

		<div class="copy">
			Copyright &copy;  2019 Nader Research Group. <br>All rights reserved.
		</div> <!--copy-->

		<div class="DevelopedBy">
		   Developed by <a href="https://uglymugmarketing.com/" target="_blank">ugly mug marketing</a>
		</div> <!--DevelopedBy-->

		<div class="TopArrow">
			<a href="#top" class="scroll">
				<i class="fa fa-circle fa-stack-2x"></i>			
				<i class="fa fa-angle-up fa-stack-1x fa-inverse"></i>
			</a>
		</div> <!--TopArrow-->

	</div>
</footer> <!--footer-->
        
       
<script src="js/common.js" type="text/javascript"></script>

<!--
<script type="text/javascript">
jQuery(document).ready(function(){
		jQuery(".HomeTop").hide();

  		jQuery(window).scroll(function() {
			var sd = jQuery(window).scrollTop();
			if ( sd > 95 ) 
				jQuery(".HomeTop").fadeIn(500);
			else 
				jQuery(".HomeTop").fadeOut(500);
		});
});
</script>
-->

<!-- Popup js -->

<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>

<script>
	jQuery( document ).ready( function () {

		jQuery( '.popup-youtube, .popup-vimeo, .popup-gmaps' ).magnificPopup( {
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		} ); //jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps')
		
//		jQuery('.popup-gallery').magnificPopup({
//			  delegate: 'a',
//			  type: 'image',
//			  tLoading: 'Loading image #%curr%...',
//			  mainClass: 'mfp-img-mobile',
//			  gallery: {
//				enabled: true,
//				navigateByImgClick: true,
//				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
//			  },
//			  image: {
//				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
//				titleSrc: function(item) {
//				  return item.el.attr('title');
//				}
//			  }
//			});//jQuery('.slide-popup-gallery')
		

	} );
</script>
<!--magnific popup-->


<script>
	function scrollpage( $ID ) {
		$Top = $( '#' + $ID ).offset().top;
		jQuery( 'html, body' ).animate( {
			scrollTop: $Top - 100
		}, 1000 );
	}

	jQuery( document ).ready( function () {
		jQuery( '.box' ).hide();

		jQuery( '.activator' ).click( function ( e ) {
			e.preventDefault();
			$ID = $( this ).attr( 'rel' );
			$( '#overlay' ).fadeIn( 'fast' );
			$( '#' + $ID ).fadeIn();
			scrollpage( $ID );
			//$(this).toggle() ;
		} );

		jQuery( '.boxclose' ).click( function ( e ) {
			e.preventDefault();
			$ID = $( this ).attr( 'rel' );
			jQuery( '#' + $ID ).fadeOut( 'fast', function () {
				jQuery( '#overlay' ).fadeOut( 'fast' );
			} );
		} );
	} );
</script> <!--overlay script-->
<div class="StickyBtns CTAFloating">
	<div class="FillRedBorder"></div>
	<div class="MainWrapper">

		<div class="RightWrapper">
			<div class="group ClearBoth">
				<div class="FSocialIcon">
			<ul class="SocialIcons">
				<li>
					<a href="https://www.facebook.com/abtreecareservice" class="fa-stack fa-lg" target="_blank">			
						<i class="fa fa-circle fa-stack-2x"></i>			
						<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>			
					</a>			
				</li>
				<li> 
					<a href="#" class="fa-stack fa-lg" target="_blank"> 
						<i class="fa fa-circle fa-stack-2x"></i> 
						<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
					</a> 
				</li>
				<li>
					<a href="https://goo.gl/maps/nAXyDhYEmLhq8Lj17" class="fa-stack fa-lg" target="_blank">			
						<i class="fa fa-circle fa-stack-2x"></i>			
						<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>			
					</a>			
				</li>
			</ul>
	   </div>  <!--social icons-->


				<div class="FillRedBtn"> <a href="#" class="activator" rel="RequestAQuote">Request A Quote</a>
				</div>

			</div>
		</div>

	</div>
</div>


<div class="overlay" id="overlay" style="display:none;"> </div>
<div class="box RequestAQuote" id="RequestAQuote" style="display:none;"> 
	<a href="#" class="boxclose" rel="RequestAQuote">
        <i class="fa fa-close"></i>
     </a>
	<div class="ContactFormWrap  OverlayWrapper">
	
		<h3 class="Title">RequestAQuote</h3>
	
		<div class="FormWrapper" id="HideRequestAQuoteForm">
            <form name="FormRequestAQuote" id="FormRequestAQuote" method="post"  action="thanks-request-a-quote.php" target="_blank">
            <div class="Col3">
                <input type="text" placeholder="First Name*" name="FName" id="FName">
                 <input type="hidden" name="ServiceName" id="ServiceName">
            </div>
            <div class="Col3">
                <input type="text" placeholder="Last Name*" name="LName" id="LName">
            </div>
            <div class="Col3">
                <input type="text" placeholder="Phone*" name="Phone" id="Phone">
            </div>
            <div class="Col3">
                <input type="text" placeholder="City" name="City" id="City">
            </div>
            <div class="Col3">
                <select name="State" id="State">
                    <option value="AK">Alaska</option><option value="AL">Alabama</option><option value="AR">Arkansas</option><option value="AZ">Arizona</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DC">District of Columbia</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="IA">Iowa</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="MA">Massachusetts</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MO">Missouri</option><option value="MS">Mississippi</option><option value="MT">Montana</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="NE">Nebraska</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NV">Nevada</option><option value="NY">New York</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC" selected >South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WI">Wisconsin</option><option value="WV">West Virginia</option><option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="Col3">
                <input type="text" placeholder="Zip" name="Zip" id="Zip">
            </div>
            <div class="Col2">
                <input type="text" placeholder="Email*" name="Email" id="Email">
                 <input type="email"  name="_Email" id="_Email" style="display:none;">
            </div>
            <div class="Col2">
                <input type="text" placeholder="Address" name="Address" id="Address">
            </div>
            <div class="Col1">
                <textarea placeholder="Comments" name="Comment" id="Comment"></textarea>
            </div>
            <div class="group ClearBoth">
                <div class="SecurityCode Col2">
                 <div class="g-recaptcha" id="recaptcha1"></div>
				   <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha1" id="hiddenRecaptcha1">
                </div>
                <div class="Col2 SubmitBtn TAR">
                    <div class="FillRedBtn">
                        <a href="#"  id="RequestAQuoteSubmitBtn">Submit</a>
                    </div>
                </div>
            </div>	
            
           </form>
        </div><!--FormWrapper-->

		<div class="LoaderImg TAC" id="LoaderCont" style="display:none;margin:100px 80px;">
			<img src="images/loader.gif" /> 
		</div>

		<div class="ThanksMsg TAC" id="CntThanksMsg" style="display:none; margin:100px 80px;"> 
			Thank you for your information. <br /> We will get back to you soon.
		</div>
	</div>
</div>
