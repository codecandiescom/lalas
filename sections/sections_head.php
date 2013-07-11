<!DOCTYPE html>

<html>
<head>


	<?php

	/* before including openHTML.php just set $page to a value
	 * and add that value to this switch. Then set $title, $description, $keywords
	 * for each page
	*/

	$title = "";
	$type = "";
	$description = "";
	$keywords = "";
	$banner = "";

	switch($page)
	{
		case 'home':
			$title = "LaLa's | Pittsburgh Express Extensions and Styling Salon";
			$type = "home";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>Lorem ipsum dolar</h2><h3>consectetur adipiscing elit</h3>";
			break;

		case 'about':
			$title = "About LaLa's | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, Aaron Gary";
			$banner = "<h2>A little bit</h2><h3>about us...</h3>";
			break;
			
		case 'booknow':
			$title = "Book with LaLa's | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>We'll fit into your schedule!</h2><h3>Book your appointment today!</h3>";
			break;
			
		case 'services':
			$title = "LaLa's Services | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>View our</h2><h3>packages, specials and more!</h3>";
			break;
			
		case 'contact':
			$title = "Contact LaLa's | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>We'd love to</h2><h3>hear from you!</h3>";
			break;
			
		case 'products':
			$title = "LaLa's Products | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>Top products</h2><h3>for beautiful hair</h3>";
			break;
			
		case 'gallery':
			$title = "LaLa's Products | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>Stop and Stare Hair!</h2><h3>LaLa's</h3>";
			break;
			
		case 'faq':
			$title = "LaLa's FAQ | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>FAQ</h2><h3>LaLa's</h3>";
			break;
                    
                    case 'careers':
			$title = "LaLa's Careers | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>Join our Team</h2><h3>LaLa's</h3>";
			break;
                    
                    case 'policy':
			$title = "LaLa's Salon Policy | Pittsburgh Express Extensions and Styling Salon";
			$type = "interior";
			$description = "LaLa's is an express extension and styling salon located in Pittsburgh, PA. We offer
                            fast service, affordable prices and quality hairstyles!";
			$keywords = "hair salon, black hair salon, pittsburgh hair salon, natural hair salon,
                            eyelash extensions, hair extensions, womens hair salon, hair styling, professional
                            hair styling, african american hair care, salon, ethnic hair
                            care, hair care, hairdresser, black hair care";
			$banner = "<h2>Salon Policy</h2><h3>LaLa's</h3>";
			break;
			
	}

	echo "<title>$title</title>\n";
	echo "<meta name=\"description\" content=\"$description\" />\n";
	echo "<meta name=\"keywords\" content=\"$keywords\" />\n";

?>
	
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	
	<link rel="stylesheet" href="assets/css/screen-standards.css" media="screen" />
	<link rel="stylesheet" href="assets/css/screen-ie.css" media="screen" />
	<link rel="stylesheet" href="assets/css/jquery.lightbox-0.5.css" media="screen" />
	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
	
	<script src="http://use.typekit.com/ycy2kyr.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script src="http://maps.google.com/maps?file=api&v=2.50a&amp;sensor=false&amp;key=ABQIAAAAkAl2A4zQMEsu_SEACDUYpxRMUQRAHnpZc4MoQ9J-N__f-pEyAxR_glEbL9KUD5rXyYdOM3dnzs9SwA" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="assets/js/jquery.gmap-1.1.0-min.js"></script>
	<!-- Makes HTML5 work in Internet Explorer -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="assets/js/jquery-ui-1.8.13.custom.min.js"></script>
	<script src="assets/js/jquery.doTimeout.js"></script>
	<script src="assets/js/jquery.DOMWindow.js"></script>
	<script src="assets/js/jquery.ui.selectmenu.js"></script>
	<script src="assets/js/jquery.multiselect.js"></script>
	<script src="assets/js/jquery.multiselect.filter.js"></script>
	<script src="assets/js/jquery.ui.datepicker.js"></script>
	<script src="assets/js/curvycorners.js"></script>
	<script src="assets/js/jquery.lightbox-0.5.pack.js"></script>
	<script src="assets/js/jquery.effects.slide.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/jquery.stickyfloat.js"></script>
	<script src="assets/js/jquery.scrollTo-1.4.2-min.js"></script>
	<script src="assets/js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="assets/js/small-scripts.js"></script>

	
	<script>var curvyCornersVerbose = false;</script>
</head>