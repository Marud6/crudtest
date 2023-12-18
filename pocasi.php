<!DOCTYPE html>
<?php
include("config.php");

$city="pardubice";
$key=$_SESSION['api_key'];
$url="http://api.openweathermap.org/data/2.5/weather?q='$city'&appid='.$key.'";

$weather=json_decode(file_get_contents($url), true);

include"./compheader.php";
echo createHeader();
echo"<pre>";
?>
<body>
    <h1 style="
    margin: auto;
    width: 640px; 
    padding: 50px;
    font-family: 'Lexend Deca', sans-serif; 
    text-align: center;
    font-size:100px;


">KOUKNI SE Z OKNA</h1>
<a class="btn btn-danger" href="index.php">Cancel</a>

</body>
</html>