<?php

// set variables
$queryUrl = "http://api.kairos.com/detect";
$imageObject = '{"image":" https://media.kairos.com/liz.jpg"}';
$APP_ID = "b91c191d";
$APP_KEY = "3d61b73125a7d66d8588d8414b6a15a9";
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