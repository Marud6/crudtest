<?php 
echo"my website";

 $dbhost = "mysql.houkal.cz";
 $dbuser = "mojedb-houkal";
 $dbpass = "Marekdb2007";
 $dbname=("mojedb-houkal");
  $mysql= new mysqli($dbhost,$dbuser,$dbpass, $dbname);
  if($mysql->connect_error) {
      echo 'connection failed';
  }





?>