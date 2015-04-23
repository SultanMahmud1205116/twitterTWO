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
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
//foreach($string as $items)
    //{
        /*
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
        */

        /*

        $data = array (
            'postID' => $items['id_str'],
            'userID' => $items['user']['id_str'],
            'post'   => $items['text'],
            'postProvider' => $items['user']['name'],
            'time' => $items['created_at'],
            'numberOfFavourites' => $items['user']['favourites_count'],
            'numberOfRetweets'   => $items['user']['favourites_count']
            );

        $this->db->insert('tPOst',$data);

        
        */

        /*
        echo "post id : ".$items['trends'][1]['name']."<br />";
        echo "poster ID : ".$items['user']['id_str']."<br />";
        echo "post : ".$items['text']."<br />";
        echo "post provider : ".$items['user']['name']."<br />";
        echo "post time : ".$items['created_at']."<br />";
        echo " # of retweets : ".$items['retweet_count']."<br />";
        echo " # of likes : ".$items['user']['favourites_count']."<br /><hr />";
		*/
		//this will be out of loop
		echo "the location is: ".$string['locations']['name']."<br />";
		echo "the woeid is: ".$string['locations']['woeid']."<br />";
		echo "the hashtag is ".$string['trends'][0]['name']."<br />";
		echo "the hashtag is ".$string['trends'][1]['name']."<br />";
		echo "the hashtag is ".$string['trends'][2]['name']."<br />";
		echo "the hashtag is ".$string['trends'][3]['name']."<br />";
		echo "the hashtag is ".$string['trends'][4]['name']."<br />";
		echo "the hashtag is ".$string['trends'][5]['name']."<br />";
		echo "the hashtag is ".$string['trends'][6]['name']."<br />";
		echo "the hashtag is ".$string['trends'][7]['name']."<br />";
		echo "the hashtag is ".$string['trends'][8]['name']."<br />";
		echo "the hashtag is ".$string['trends'][9]['name']."<br />";
		echo "the hashtag is ".$string['trends'][10]['name']."<br />";
		echo "the hashtag is ".$string['trends'][11]['name']."<br />";
		echo "the hashtag is ".$string['trends'][12]['name']."<br />";
		echo "the hashtag is ".$string['trends'][13]['name']."<br />";
		echo "the hashtag is ".$string['trends'][14]['name']."<br />";


        



   // }
?>