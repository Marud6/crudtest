<?php 
  $id=1;
  $dbhost = $_SESSION["host"];
  $dbuser = $_SESSION["usr"];
  $dbpass = $_SESSION["pas"];
  $dbname= $_SESSION["db"];
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

    <title>view</title>
</head>
<body>
   






    <?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $id=$_GET["id"];
    $sql="SELECT * FROM bloks WHERE id=$id";
    $res= $mysql->query($sql);
    $row= $res->fetch_assoc();
    $name=$row["name"];
    $content=$row["content"];
    $create=$row["created_at"];
   
    
    }


    

    
    
    
    ?>
      <form method="post">
    <div  class='container-fluid'>
        
   
    

</form>

<div class="container mt-3">
  <h1><?php echo($name)?></h1>
  <p>Autor:</p>
  <blockquote class="blockquote">
    <p><?php echo($content)?></p>
    <footer class="blockquote-footer"><?php echo($create)?></footer>
  </blockquote>
</div>
<a class="btn btn-danger" href="index.php">Cancel</a>
    
</body>
</html>

