<?php 
            include("config.php");

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
<?php
include"./compheader.php";
echo createHeader();
?>
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
    $autor=$row["autor"];
  

    
    }


    

    
    
    
    ?>
      <form method="post">
    <div  class='container-fluid'>
        
   
    

</form>

<div class="container mt-3">
  <h1><?php echo($name)?></h1>
  <p>Autor:<?php echo($autor)?></p>
  <blockquote class="blockquote">
    <p><?php echo($content)?></p>
    <footer class="blockquote-footer"><?php echo($create)?></footer>
  </blockquote>
</div>
<a class="btn btn-danger" href="index.php">Cancel</a>
    
</body>
</html>

