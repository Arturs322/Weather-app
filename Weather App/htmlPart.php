<!DOCTYPE html>
<html lang="en">
<head>
    <title>Weather by Arthur</title>
    <link rel="stylesheet" href="http://api.weatherapi.com/v1/current.json?key=5534b3f7a0274db89ac80448212809&q=Riga&aqi=no
">

</head>
<style>
body
{
    background: url("https://miro.medium.com/max/4800/1*GsImz-edoeuqCMfKxDus0w.jpeg")
}
.styled-table
{
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
h1
{
color: white;
}
form
{
    text-align: center;
    color: white;
    font-size: 30px;
}
input
{
    font-size: 20px;
}
</style>

<?php
$apiData = file_get_contents("http://api.weatherapi.com/v1/current.json?key=5534b3f7a0274db89ac80448212809&q=Riga&aqi=no");
$weather = json_decode($apiData, true);
$location = $weather['location']['name'];
$localTime = $weather['location']['localtime'];
$temperature = $weather['current']['temp_c'];
$condition = $weather['current']['condition']['text'];

$dailyApiData = file_get_contents("http://api.weatherapi.com/v1/forecast.json?key=5534b3f7a0274db89ac80448212809&q=Riga&days=10&aqi=no&alerts=no
");
$dailyWeather = json_decode($dailyApiData, true);
$dailyLocation = $dailyWeather['forecast']['forecastday'][0]['date'];
$dailyTemperature = $dailyWeather['forecast']['forecastday'][0]['day']['maxtemp_c'];
$dailyCondition = $dailyWeather['forecast']['forecastday'][0]['day']['condition']['text'];

$l = $dailyWeather['forecast']['forecastday'][1]['date'];
$t = $dailyWeather['forecast']['forecastday'][1]['day']['maxtemp_c'];
$c = $dailyWeather['forecast']['forecastday'][1]['day']['condition']['text'];

$lc = $dailyWeather['forecast']['forecastday'][2]['date'];
$tc = $dailyWeather['forecast']['forecastday'][2]['day']['maxtemp_c'];
$cc = $dailyWeather['forecast']['forecastday'][2]['day']['condition']['text'];
?>
<body>

<header>
    <div style="text-align: center">
    <h1>Arthur's Weather Forecast</h1>
    </div>
</header>

<form action="index.php" method="get">
    <label for="city"><b>City:</b></label><br>
    <input style="font-size: 30px" type="text" id="city" name="city" placeholder="Enter city..."><br><br>
    <input  type="submit" name="submit" value="Submit"><br><br>

</form>


<div style="text-align: center">
<h2>Weather forecast Riga</h2>
</div>
<table class="styled-table">
    <thead>
    <tr>
        <th>Day</th>
        <th>City</th>
        <th>Date/Local time</th>
        <th>Temperature in Celsius</th>
        <th>Condition</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Current</td>
        <td><?php echo $location?></td>
        <td><?php echo $localTime?></td>
        <td><?php echo $temperature?></td>
        <td><?php echo $condition?></td>
    </tr>
    <tr class="active-row">
        <td>Tomorrow</td>
        <td>Riga</td>
        <td><?php echo $l?></td>
        <td><?php echo $t?></td>
        <td><?php echo $c?></td>
    </tr>
    <tr>
        <td>Thursday</td>
        <td>Riga</td>
        <td><?php echo $lc?></td>
        <td><?php echo $tc?></td>
        <td><?php echo $cc?></td>
    </tr>
    </tbody>
</table>
</body>

</html>