<?php

/* set out document type to text/javascript instead of text/html */
header("Content-type: application/json");

// Allow access from anywhere. Can be domains or * (any)
header('Access-Control-Allow-Origin: *');

// Allow these methods of data retrieval
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

// Allow these header types
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
$table = $_GET["table"];
$column = $_GET["column"];



$url='https://www.googleapis.com/fusiontables/v2/query?sql=SELECT+' . $column . '+FROM+191x3sanVgYMCQhPoZjU5GrcfYOaji5ofjKaV221O&key=AIzaSyB1W7VGTnKVu3f2LVACiM84by7TA4P5H1A';


//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

echo $result;

?>