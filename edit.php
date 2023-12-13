<?php
            include("config.php");

   $id="";
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

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $id=$_GET["id"];
$sql="SELECT * FROM bloks WHERE id=$id";
$res= $mysql->query($sql);
$row= $res->fetch_assoc();
$name=$row["name"];
$content=$row["content"];


}
else{
    $id=$_GET["id"];
    $name=$_POST["name"];
    $content=$_POST["content"];
        if(empty($content)||empty($name)){
            echo("bad");
       }
        $sql="UPDATE bloks " .
             "SET name = '$name', content = '$content'" .
             "WHERE id = '$id'";
              
        

        $res= $mysql->query($sql);
        if(!$res) echo("soo bad");
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

</div>
<div>
        <h1>New blok</h1>
        <form method="post">
        <div class="input-group mb-3">
  <input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder=" Name">
  

</div>
<label for="comment">Content:</label>
<textarea class="form-control" rows="5" id="comment" name="content" ><?php echo $content;?></textarea>   






           
            <a class="btn btn-danger" href="index.php">cancel</a>   
            <button class="btn btn-success" type="submit" >Submit</button>

            </div>
        </form>
    </div>
    






</body>
</html>