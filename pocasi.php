
<?php
include("config.php");
$city;

$key=$_SESSION['api_key'];

include"./compheader.php";



if($_SERVER["REQUEST_METHOD"]=="POST"){
echo"worked";
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];


    if($_POST["cityy"]!=null) {
        $city=htmlspecialchars($_POST["cityy"]);}
    $url='http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$key;
    $weather=json_decode(file_get_contents($url), true);
    echo"<pre>";
    print_r($weather);
    $temperature=$weather["main"]["temp"]-273.15;//kelviny na C
echo round($temperature);





}







?>
<!DOCTYPE html>
<?php
echo createHeader();


?>


<body>


<form method="post">
<input type="text" class="form-control" name="cityy" value="<?php echo $city;?>" placeholder=" city">

<a class="btn btn-danger" href="index.php">Cancel</a>
<button class="btn btn-success" type="submit" >Submit</button>

</form>
<button class="btn btn-success"  id="btn">Show current location weather</button>


</body>
</html>




