
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Weather</title>
</head>
<body>

<br>

<h2>Weather Checker</h2>
<br>
<form class="form-group" method="post">
	<input name="city" placeholder="City Name"></input>
    <button id="weather" name="sub" class="check">Check Weather</button>
    <br>



</body>
</html>


<?php

if (isset($_POST['sub'])){

$city = $_POST['city'];


$url="http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&cnt=7&lang=en&appid=73824d1e06fca7c4db1126ee2360869d";

$json=file_get_contents($url);

$data=json_decode($json,true);

echo "<p>Current Temperature in " . ucfirst($city)  . ' is '. $data['main']['temp'] . "&#176; Celcius</button></p>";

echo "<p>Wind Speed : " . $data['wind']['speed'] . " KMPH</p>";

echo "<p>Humidity :" . $data['main']['humidity'] . " %</p>";

 

echo  "<p>Weather condition : " . $data['weather'][0]['main']  . "</p>";

 

}


?>



