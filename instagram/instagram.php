<?php
header('Content-type: application/json');

$user_id = 'xxxxxxxx'; //Replace with your user_id
$access_token = 'xxxxxxxx.xxxxxxxx.xxxxxxxxxxxxxxxxxxxxxxxxx'; //Replace with your access_token
$number_photos = '18';

$api_url = 'https://api.instagram.com/v1/users/' . $user_id . '/media/recent/?access_token=' . $access_token . '&count=' . $number_photos;

function fetchData($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	$result = curl_exec($ch);
	curl_close($ch); 
	return $result;
}

$result = fetchData($api_url);
$result = json_encode($result);

echo $result;

?>