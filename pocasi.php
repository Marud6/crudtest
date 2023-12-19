
<?php
include("config.php");
$city;

$key=$_SESSION['api_key'];

include"./compheader.php";



if($_SERVER["REQUEST_METHOD"]=="POST"){
echo"worked";
    $city=htmlspecialchars($_POST["cityy"]);
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
<script>
function locati(){
    const x = document.getElementById("id");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "No geolocation :(";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}




}

</script>

<body>


<form method="post">
<input type="text" class="form-control" name="cityy" value="<?php echo $city;?>" placeholder=" city">

<a class="btn btn-danger" href="index.php">Cancel</a>
<button class="btn btn-success" type="submit" >Submit</button>

</form>
<button class="btn btn-success"  onclick="<script>locati()</script>">Show current location weather</button>


</body>
</html>




