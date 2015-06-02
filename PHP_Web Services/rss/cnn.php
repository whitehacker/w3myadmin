<html>
<head></head>

<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=236564453025131";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
function getFeeds($url){
	$x = simplexml_load_file($url);	
	//$x = new DOMDocument();
		//$x->load($url);
		
		echo "<ul>";
		foreach ($x->channel->item as $entry){
			
				echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
				
			
		}
		echo "</ul>";
	
}

echo getFeeds("http://rss.cnn.com/rss/cnn_tech.rss");
echo "<hr/>";
echo getFeeds("http://rss.cnn.com/rss/cnn_freevideo.rss");	
?>
<hr/>
<div class="fb-like" data-href="http://cs.rahnama.af" data-width="400" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<a class="twitter-timeline" href="https://twitter.com/bbaheer" data-widget-id="587131869021503489">Tweets by @bbaheer</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>