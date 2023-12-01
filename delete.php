<?php
$id= $_GET["id"];
$dbhost = "mysql.houkal.cz";
$dbuser = "mojedb-houkal";
$dbpass = "Marekdb2007";
$dbname=("mojedb-houkal");
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