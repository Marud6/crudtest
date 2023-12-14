<?php
            include("config.php");

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

if($_SERVER["REQUEST_METHOD"]=="POST")

    $content=htmlspecialchars($_POST["content"]);
    $name=htmlspecialchars($_POST["name"]);





    while(true){ 
    if(empty($content)||empty($name)){
        
        break;


    }
    $ipaddress = getenv("REMOTE_ADDR") ;
    $time=$_SERVER['REQUEST_TIME'] ;
    $sql="INSERT INTO bloks (name, content,autor,time)". 
        "VALUES ('$name','$content','$ipaddress','$time')";

       
       
        $res= $mysql->query($sql);
        
        header('location: index.php');  
       exit;

    

        

    
}





?>



<!DOCTYPE html>
<?php
include"./compheader.php";
echo createHeader();
?>
<body>
    <div>
        <h1>New blo</h1>
        <form method="post">
        <div class="input-group mb-3">
  <input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder=" Name">
</div>
<label for="comment">Content:</label>
<textarea class="form-control" rows="5" id="comment" name="content" value="<?php echo $content;?>" placeholder=" Your content..."></textarea>





           
            <a class="btn btn-danger" href="index.php">cancel</a>
            <button class="btn btn-success" type="submit" >Submit</button>

        </form>
    </div>
    
</body>
</html>
<?php
 
?>