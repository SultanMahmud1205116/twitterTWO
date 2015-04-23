<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "3146903359-n1BViBTMztqSd0QIuUGfx8Toa109JqB9h7Czwh3",
    'oauth_access_token_secret' => "jc00yyRHq5tu3pzgGZGEFHjij6eG0ciDviYdq82s3Wg7s",
    'consumer_key' => "w5TqlKvu2baoRKxZm6xPgUZfs",
    'consumer_secret' => "Mc1klDqUy380T41HiE3famsxprnul73Eo2k99GtBtmsttbyCVi"
);
 
$url = "https://api.twitter.com/1.1/trends/place.json";
 
$requestMethod = "GET";
 
$getfield = '?id=2514815';
 
$twitter = new TwitterAPIExchange($settings);
/*
echo "<pre>";
print_r($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest()) ;
echo "</pre>";
*/
$strings = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($strings["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$strings[errors][0]["message"]."</em></p>";exit();}
foreach($strings as $items)
    //{
        /*
        echo "Time and Date of Tweet: ".$strings['created_at']."<br />";
        echo "Tweet: ". $strings['text']."<br />";
        echo "Tweeted by: ". $strings['user']['name']."<br />";
        echo "Screen name: ". $strings['user']['screen_name']."<br />";
        echo "Followers: ". $strings['user']['followers_count']."<br />";
        echo "Friends: ". $strings['user']['friends_count']."<br />";
        echo "Listed: ". $strings['user']['listed_count']."<br /><hr />";
        */

        /*

        $data = array (
            'postID' => $strings['id_str'],
            'userID' => $strings['user']['id_str'],
            'post'   => $strings['text'],
            'postProvider' => $strings['user']['name'],
            'time' => $strings['created_at'],
            'numberOfFavourites' => $strings['user']['favourites_count'],
            'numberOfRetweets'   => $strings['user']['favourites_count']
            );

        $this->db->insert('tPOst',$data);

        
        */

        /*
        echo "post id : ".$strings['trends'][1]['name']."<br />";
        echo "poster ID : ".$strings['user']['id_str']."<br />";
        echo "post : ".$strings['text']."<br />";
        echo "post provider : ".$strings['user']['name']."<br />";
        echo "post time : ".$strings['created_at']."<br />";
        echo " # of retweets : ".$strings['retweet_count']."<br />";
        echo " # of likes : ".$strings['user']['favourites_count']."<br /><hr />";
		*/
		//this will be out of loop
		//echo "the thing is : "."<br />";
		echo "the location is: ".$items['locations'][0]['name']."<br />";
		echo "the woeid is: ".$items['locations'][0]['woeid']."<br />";
		echo "the hashtag is ".$items['trends'][0]['name']."<br />";
		echo "the hashtag is ".$items['trends'][1]['name']."<br />";
		echo "the hashtag is ".$items['trends'][2]['name']."<br />";
		echo "the hashtag is ".$items['trends'][3]['name']."<br />";
		echo "the hashtag is ".$items['trends'][4]['name']."<br />";
		echo "the hashtag is ".$items['trends'][5]['name']."<br />";
		echo "the hashtag is ".$items['trends'][6]['name']."<br />";
		echo "the hashtag is ".$items['trends'][7]['name']."<br />";
		echo "the hashtag is ".$items['trends'][8]['name']."<br />";
		echo "the hashtag is ".$items['trends'][9]['name']."<br />";
		//echo "the hashtag is ".$items['trends'][10]['name']."<br />";
		//echo "the hashtag is ".$items['trends'][11]['name']."<br />";
		//echo "the hashtag is ".$items['trends'][12]['name']."<br />";
		//echo "the hashtag is ".$items['trends'][13]['name']."<br />";
		//echo "the hashtag is ".$items['trends'][14]['name']."<br />";
		//hello


        



   // }
?>