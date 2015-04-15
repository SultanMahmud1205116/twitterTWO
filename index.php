<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "3146903359-n1BViBTMztqSd0QIuUGfx8Toa109JqB9h7Czwh3",
    'oauth_access_token_secret' => "jc00yyRHq5tu3pzgGZGEFHjij6eG0ciDviYdq82s3Wg7s",
    'consumer_key' => "w5TqlKvu2baoRKxZm6xPgUZfs",
    'consumer_secret' => "Mc1klDqUy380T41HiE3famsxprnul73Eo2k99GtBtmsttbyCVi"
);
 
$url = "https://api.twitter.com/1.1/statuses/home_timeline.json";
 
$requestMethod = "GET";
 
$getfield = '?screen_name=1205116_sm&count=30;
 
$twitter = new TwitterAPIExchange($settings);

$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
foreach($string as $items)
    {
    	


        echo "post id : ".$items['id_str']."<br />";
        echo "poster ID : ".$items['user']['id_str']."<br />";
        echo "post : ".$items['text']."<br />";
        echo "post provider : ".$items['user']['name']."<br />";
        echo "post time : ".$items['created_at']."<br />";
        echo " # of retweets : ".$items['retweet_count']."<br />";
        echo " # of likes : ".$items['user']['favourites_count']."<br /><hr />";
        

        



    }
?>