<?php
$id= $_GET["id"];
$dbhost = $_SESSION["host"];
$dbuser = $_SESSION["usr"];
$dbpass = $_SESSION["pas"];
$dbname= $_SESSION["db"];
$mysql= new mysqli($dbhost,$dbuser,$dbpass, $dbname);
if($mysql->connect_error) {
   echo 'connection failed';
}

$sql="DELETE FROM bloks WHERE id='$id'";
$res= $mysql->query($sql);
if(!$res) echo("soo bad");
header('location: index.php'); 
exit;







?>