<?php 
  $id=1;
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname=("bloky");
 $mysql= new mysqli($dbhost,$dbuser,$dbpass, $dbname);
 if($mysql->connect_error) {
     echo 'connection failed';
 }
 




$name="";
$content="";









?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body>
   






    <?php
    session_start();
   


    if(isset($_POST['next'])){
        $_SESSION['number']++;   
        $id=$_SESSION['number'] ;
     }

     if(isset($_POST['back'])){
        if($_SESSION['number']==1) $_SESSION['number']++;   
        $_SESSION['number']--;   
        $id=$_SESSION['number'] ;
     }




    
     $sql="SELECT * FROM bloks";
   $res= $mysql->query($sql);





    while($row =$res->fetch_assoc()){
        echo"
        <div class='row' class='container-fluid'>
        <h1>$row[name]</h1>
        <p1>$row[content]</p1>
</div>

        
    ";
    
    }

    
    
    ?>
    <div  class='container-fluid'>
    <a class="btn btn-danger" href="index.php">Back</a>

</div>
    
</body>
</html>

