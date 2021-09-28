<?php
require_once "htmlPart.php";
//require_once "vendor/autoload.php";
//use App\City;
//use App\WeatherData;
//use App\Day1;


if (array_key_exists('submit', $_GET)) {
    if (!$_GET['city']) {
        $error = "Not a valid city";
    }
    if ($_GET['city'] == "Riga") {
        $apiData = file_get_contents("http://api.weatherapi.com/v1/current.json?key=5534b3f7a0274db89ac80448212809&q=Riga&aqi=no");
        $weather = json_decode($apiData, true);
        $weatherArray1 = "Location: " . $weather['location']['name'];
        $weatherArray2 = "Time: " . $weather['location']['localtime'];
        $weatherArray = "Temperature: " . $weather['current']['temp_c'];
        echo $weatherArray1;
        echo $weatherArray2;
        echo $weatherArray;

    }
}
$dailyApiData = file_get_contents("http://api.weatherapi.com/v1/forecast.json?key=5534b3f7a0274db89ac80448212809&q=Riga&days=10&aqi=no&alerts=no");
$dailyWeather = json_decode($dailyApiData, true);


/*
$city = new City("/", "/", "/");
echo $city->getName();

//$firstDay = new WeatherData([
        $dailyWeather['forecast']['forecastday'][0]['date'],
        $dailyTemperature = $dailyWeather['forecast']['forecastday'][0]['day']['maxtemp_c'],
        $dailyCondition = $dailyWeather['forecast']['forecastday'][0]['day']['condition']['text'],
    ]
);

//echo $firstDay->getData();
//foreach ($firstDay as $item)
{
    echo $firstDay->getData();
}

$apiData = file_get_contents("http://api.weatherapi.com/v1/current.json?key=5534b3f7a0274db89ac80448212809&q=Riga&aqi=no");
$weather = json_decode($apiData, true);
$weatherArray = "Location: " . $weather['location']['name'];
$weatherArray = "Location: " . $weather['current']['temp_c']['condition']['text'];

 * if (isset($_POST['city']))
{
    $apiData = file_get_contents("http://api.weatherapi.com/v1/current.json?key=5534b3f7a0274db89ac80448212809&q=Riga&aqi=no");
    $weather = json_decode($apiData, true);
    $weatherArray = "Location: " . $weather['location']['name'];
    //echo $weatherArray;
   // echo $apiData;
    echo "hello";
}
 *
 *
 $dailyApiData = file_get_contents("http://api.weatherapi.com/v1/forecast.json?key=5534b3f7a0274db89ac80448212809&q=Riga&days=10&aqi=no&alerts=no
");
$wthr = json_decode($dailyApiData, true);
$wthrarr = $wthr['location']['name'];
echo $wthrarr;


 */