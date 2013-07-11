<?php $page = 'gallery'; include("sections/sections_head.php"); ?>

	<?php include 'sections/sections_masthead.php'; ?>
		
		<?php include 'sections/sections_subbanner.php'; ?>
		
		<section id="content_wrap">
			
			<div id="content_wrap_inner">
			
				<div class="cwi_col_left">
					
					<h2>Check out some of our work!</h2>
					
					<p>Please click on the images for better viewing.</p>
					
					<?php
require_once("phpFlickr.php");

$page = empty($_GET['page']) ? 1 : $_GET['page'];

// API Key is already set up.
$api_key = "8a08e32dc282ff9dc90660510baf724b";
// Don't think secret is needed, but I kept it here just in case
$secret = "562e32b8742f1540";
// The users id
$user_id = "53009063@N07";
// How many images to display per page
$images_per_page = 100;

$f = new phpFlickr($api_key);

$photo_sets = $f->photosets_getList($user_id);
if (sizeof($photo_sets['photoset']) > 0)
{
	foreach ($photo_sets['photoset'] as $photo_set)
	{
		//echo "<h2 class=\"subpages\">{$photo_set['title']}</h2>\n";
		echo "<ul class=\"photoSet\">\n";
		$photos = $f->photosets_getPhotos($photo_set['id'], NULL, NULL, $images_per_page, $page);
		$num_photos = sizeof($photos['photoset']['photo']);
		if (sizeof($photos['photoset']['photo']) > 0)
		{
			foreach ($photos['photoset']['photo'] as $photo)
			{
				$photo_url = $f->buildPhotoUrl($photo, 'large');
				$photo_url_thumb = $f->buildPhotoURL($photo, 'square');
				echo "<li><a href=\"$photo_url\" title=\"{$photo['title']}\" ><img src=\"$photo_url_thumb\" alt=\"{$photo['title']}\" /></a></li>\n";
			}
		}
		echo "</ul>\n";

		echo "<div class=\"photoNav\">";

		if ($page > 1)
		{
			$prev_page = $page - 1;
			echo "<a href=\"photos.php?page=$prev_page\">Back</a>";
		}

		if ($num_photos >= $images_per_page)
		{
			$next_page = $page + 1;
			echo "<a href=\"photos.php?page=$next_page\">Next</a>\n";
		}

		echo "</div>";
	}
}
                ?>
					
				</div><!--/cwi_col_left-->
				
				<div class="cwi_col_right">
				
					<?php include 'sections/sections_hours.php'; ?>
					
					<?php include 'sections/sections_ads.php'; ?>
					
				</div><!--/cwi_col_right-->
				
			</div><!--/content_wrap_inner-->
			
		</section><!--/content_wrap-->
		
		<?php include 'sections/sections_map.php'; ?>
		
		<?php include 'sections/sections_foot.php'; ?>