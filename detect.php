<?php

// set variables
$queryUrl = "http://api.kairos.com/detect";
$imageObject = '{"image":" https://media.kairos.com/liz.jpg"}';
$APP_ID = "Your app id";
$APP_KEY = "Your app secret";
$request = curl_init($queryUrl);
// set curl options
curl_setopt($request, CURLOPT_POST, true);
curl_setopt($request,CURLOPT_POSTFIELDS, $imageObject);
curl_setopt($request, CURLOPT_HTTPHEADER, array(
        "Content-type: application/json",
        "app_id:" . $APP_ID,
        "app_key:" . $APP_KEY
    )
);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($request);
// show the API response
echo $response;
// close the session
curl_close($request);



?>
