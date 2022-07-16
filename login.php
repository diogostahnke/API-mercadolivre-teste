<?php 

//The url you wish to send the POST request to
$url = "https://api.mercadolibre.com/oauth/token";

//The data you want to send via POST
$fields = [
    'accept ' => 'aplication/json',
    'content-type' => 'application/x-www-form-urlencoded',
    'grant_type' => 'authorization_code',
    'client_id' => '4606407515784208',
    'client_secret' => 'Uwx1FeP9hMcyICSQEqWC8lsQet99yncu',
    'code' => $_GET['code'],
    'redirect_uri' => 'https://staketeste.herokuapp.com/login.php'
];

//url-ify the data for the POST
$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);

curl_close($ch);
$decoded = json_decode($result);
print_r($decoded->{'access_token'});
header("Location: index.php")
?>