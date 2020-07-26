	jQuery(document).ready(function(){
		//alert('ccc');
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			
			var mphone1 = jQuery('.MPhone1').html();
			//alert(mphone);
			var dismphone = '<a href="tel:'+mphone1+'">'+mphone1+'</a>';
			jQuery('.MPhone1').html(dismphone);
			
			var mphone2 = jQuery('.MPhone2').html();
			//alert(mphone);
			var dismphone = '<a href="tel:'+mphone2+'">'+mphone2+'</a>';
			jQuery('.MPhone2').html(dismphone);
		}
		
	});
