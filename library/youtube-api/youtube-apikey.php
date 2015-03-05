<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>

	<header>
	<iframe id="ytplayer" type="text/html" width="640" height="390"
  src="http://www.youtube.com/embed/SkfbtL6LFsM?autoplay=0&controls=1&theme=light&showinfo=0&rel=0&enablejsapi=1&color=red&modestbranding=1"
  frameborder="0"></iframe>
	</header>
	
	<section>
		
	</section>

	<footer>
	<?php
	$query = "Wayne State";
	$query = urlencode($query);
	$link = file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyDbQuNvI8irWPX6jqgOmZbCKPr4Ze35BHk&channelId=UCDwo7OLacRTiOQ5cm9PC7rA&part=snippet,id&order=date&maxResults=30&q=$query");
	?><pre><?php
	var_dump($link);
	echo $link;
?>
	</pre>
	</footer>

</body>
</html>