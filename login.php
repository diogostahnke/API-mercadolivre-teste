<?php 
	$url = "https://api.mercadolibre.com/oauth/token";

	$header = array(
		"accept: aplication/json",
		"content-type: application/x-www-form-urlencoded",
		"grant_type=authorization_code",
		"client_id=4606407515784208",
		"client_secret=Uwx1FeP9hMcyICSQEqWC8lsQet99yncu",
		'code=' . $_GET['code'],
		"redirect_uri=https://staketeste.herokuapp.com/login.php"
	);
	$curl = curl_init();
	curl_setopt ($curl, CURLOPT_URL, $url);
	curl_setopt ($curl, CURLOPT_HEADER, $header);
	$response = curl_exec($curl);
	curl_close($curl);
?>