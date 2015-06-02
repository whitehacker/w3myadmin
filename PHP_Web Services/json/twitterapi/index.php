<?php
ini_set("display_errors",1);
require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => "469115347-wGZpqGgKw5wdvCQV09FuN89JtSG906PrAjxCtyxw",
    'oauth_access_token_secret' => "7XRxOkQj9lT3aR37RFjwGWcmKk5cVzexG1vDoToCYY0tx",
    'consumer_key' => "vu6jTbcbGtMyLQKKgAuuEXqiM",
    'consumer_secret' => "iXRWzpRSlpHptpFkBYHZ03IOTAWZAXZDDInlB9kUiaBIXJWv3V"
);

$url='https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=bbaheer&count=8';
$requestMethod='GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest();
echo $response;
// $tweets=json_decode($response,true);
// foreach($tweets as $tweet){
// 	echo $tweet['text'] . "<br/>";
// }
?>