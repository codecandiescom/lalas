<html>
<head>
	<title>LaLa's | Express Extensions &amp; Styling Salon</title>
	
	<link rel="stylesheet" href="assets/css/screen-standards.css" media="screen" />
	<link rel="stylesheet" href="assets/css/screen-ie.css" media="screen" />
	
	<script src="http://maps.google.com/maps?file=api&v=2.50a&amp;sensor=false&amp;key=ABQIAAAAkAl2A4zQMEsu_SEACDUYpxSYaJ-Bhs4LrnLiJZmQzdkWyBt8lBRdOgmM7_qA-tfi2im_z4Kws1YV1Q" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="assets/js/jquery.gmap-1.1.0-min.js"></script>
	<!-- Makes HTML5 work in Satan aka Internet Explorer -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="assets/js/jquery-ui-1.8.13.custom.min.js"></script>
	<script src="assets/js/small-scripts.js"></script>
	<script src="assets/js/curvycorners.js"></script>
	
	<script type="text/javascript"> 
	$(function()
	{
		$("#mapit").gMap({ 
						controls: false,
						scrollwheel: false,
						markers: 
						[{ latitude: 40.455780705272794,
                              longitude: -80.00915765762329,
							  icon: { image: "assets/images/map-locator.png",
                                      iconsize: [87, 60],
                                      iconanchor: [43,61],
                                      infowindowanchor: [12, 0] },
									 }],
						zoom: 15 });			
		
	});
	</script> 

</head>