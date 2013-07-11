

//BUTTON FADE
$(document).ready(function(){ 

	//Set the anchor link opacity to 0 and begin hover function
	$(".fader a").css({"opacity" : 0}).hover(function(){ 

		//Fade to an opacity of 1 at a speed of 200ms
		$(this).stop().animate({"opacity" : 1}, 200); 

		//On mouse-off
		}, function(){

		//Fade to an opacity of 0 at a speed of 100ms
		$(this).stop().animate({"opacity" : 0}, 100); 

	});

});

//ACCORDION
$(function() {
		$( "#accordion" ).accordion({
			header:"h3",
			autoHeight: true
		});
	});
	
//TARGET BLANK SCRIPT
$(function() {
	$('a[href^=http]').click( function() {
		window.open(this.href);
		return false;
	});
});

//TABS JS
$(function() {
		$("#product_tabs").tabs();
	});
	
//PRODUCT HOVER
$(document).ready(function() {
    $(".box_item").hover(function() {
     $(this).find(".box_item_hover").fadeIn().stop;
        }, function() {
     $(this).find(".box_item_hover").delay(100).fadeOut("fast");
        });
    });
	

//TWITTER FEED
$.getJSON("http://twitter.com/statuses/user_timeline.json?screen_name=LalasSalon&count=2&callback=?",
 		function(data){
			$.each(data, function(i,item){
				ct = item.text;
				ct = ct.replace(/http:\/\/\S+/g,  '<a href="$&" target="_blank">$&</a>');
			    ct = ct.replace(/\s(@)(\w+)/g,    ' @<a href="http://twitter.com/$2" target="_blank">$2</a>');
			    ct = ct.replace(/\s(#)(\w+)/g,    ' #<a href="http://search.twitter.com/search?q=%23$2" target="_blank">$2</a>');
				$("#twitter_feed_inner").append('<div class="tweet">'+ct +"</div>");
 			});
		});



//CALENDAR
	$(function() {
		$( "#datepicker" ).datepicker({ minDate: 0});
	});


// PHOTO GALLERY LIGHTBOX
$(function() {
	$('.photoSet li a').lightBox({
		fixedNavigation:true,
		imageBtnPrev: 'assets/images/lb-images/lightbox-btn-prev.gif',
		imageBtnNext: 'assets/images/lb-images/lightbox-btn-next.gif',	
		imageLoading: 'assets/images/lb-images/lightbox-ico-loading.gif',
		imageBtnClose: 'assets/images/lb-images/lightbox-btn-close.gif',
		overlayBgColor: '#e51072',
		overlayOpacity: 1
	});
});
						
// DATEPICKER
$(function() {
		$( "#datepicker" ).datepicker();
	});					

		
// SERVICES MENU CLASS TOGGLE
$(function(){
  $("#services_nav a").click(function(){
    $(this).parent().addClass('active'). // <li>
      siblings().removeClass('active');
  });
});

// SERVICES MENU SMOOTH SCROLL

$(function(){
	$('#services_nav, #faq_content').localScroll({
	});
});
	
// GMAPS
$(function()
	{
		$("#mapit").gMap({ 
						controls: false,
						scrollwheel: false,
						markers: 
						[{ address: "6027 Broad St 15206",
							  icon: { image: "assets/images/map-locator.png",
                                      iconsize: [87, 60],
                                      iconanchor: [43,61],
                                      infowindowanchor: [12, 0] }
									 }],
						zoom: 15 });	
	});
	
// BOOKNOW SELECT MENUS

$(function(){			
		$('.service_select_menu').selectmenu({style:'popup'});
	
	var warning = $(".message");
	
	$("select#service_main_select").multiselect({
		multiple: false,
	    selectedList: 3, // 0-based index
	    header: false,
	    click: function(e){
        if( $(this).multiselect("widget").find("input:checked").length > 3 ){
           warning.addClass("error").removeClass("success").html("You can only check two checkboxes!");
           return false;
       } else {
   warning.addClass("success").removeClass("error").html("Check a few boxes.");
	       }
	   }
	}).multiselectfilter();	


$("select#service__select").multiselect({
   selectedList: 6, // 0-based index
   header: false,
   click: function(e){
       if( $(this).multiselect("widget").find("input:checked").length > 6 ){
       warning.addClass("error").removeClass("success").html("You can only check two checkboxes!");
       return false;
   } else {
       warning.addClass("success").removeClass("error").html("Check a few boxes.");
       }
   }
}).multiselectfilter();

});
		
		
// HOMEPAGE SLIDESHOW	
$(window).load(function() {
	$('.flexslider').flexslider({
	
		animation: "fade", 
		slideshow: true,
		slideshowSpeed: 10000,
		animationDuration: 500,
		pauseOnAction: true,
		pauseOnHover: true,
		
	});
});
		

// STATIC DIV
$(function() {
			
			$('#services_nav').stickyfloat({ duration: 400 });
			
		});
		