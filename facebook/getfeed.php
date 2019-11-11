<?php

$appId = 'xxxxxxxxxxxxxxx'; //Replace with your App ID
$appSecret = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'; //Replace with your App Secret
$fb_id = 'xxxxxxxxxxx'; //Replace with your Facebook ID


# Don't need to edit below this line #
######################################

require 'facebook.php';
$facebook = new Facebook(array(
    'appId' => $appId,
    'secret' => $appSecret,
));

$fbApiGetPosts = $facebook->api('/'.$fb_id.'?fields=feed&date_format=U');

echo json_encode($fbApiGetPosts );

?>