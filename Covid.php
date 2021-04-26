<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
		$curl = curl_init();
		$country=$_GET['country'];

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country?name=$country",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-rapidapi-host: covid-19-data.p.rapidapi.com",
				"x-rapidapi-key: b4cd37087dmsha5958e3d81fa6c3p1e30d8jsna07e779f0a1a"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		$var1 = $response;
		curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		echo $var1;
	}

?>

<div>
<form action="" method="get">
	Select Country
    <input id="country" type="text" class="form-control" name="country" required autofocus>	
<button type="submit" class="btn btn-primary btn-block"  name="submit" >Search</button>
</form>
<div>
<p id="country">Country:</p>
<p id="code">Code:</p>
<p id="confirmed">Confirmed:</p>
<p id="recovered">Recovered:</p>
<p id="critical">Critical:</p>
<p id="deaths">Deaths:</p>
<p id="lastChange">Last Change:</p>
<p id="lastUpdate">Last Update:</p>
</div>

</div>
    
</body>
</html>