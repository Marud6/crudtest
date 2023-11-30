<?php
   $id="";
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
    do{
        if(empty($content)||empty($name)){
            echo("bad");
            break;   
       }
        $sql="UPDATE bloks " .
             "SET name = '$name', content = '$content'" .
             "WHERE id = '$id'";
              
        

        $res= $mysql->query($sql);
        if(!$res) echo("soo bad");
        header('location: index.php'); 
        exit;

    }while(false);

}







?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div>
        <h1>Edit blok</h1>
        <form method="post">
            <input type="hidden" name="id" value="<?echo $id  ?>">
            <div>
                <label for="">name</label>
                <input type="text" name="name" value="<?php echo $name;?>">
            </div>

            <div>
                <label for="">content</label>
                <input type="text" name="content" value="<?php echo $content;?>">
            </div>

            <div>
                <button type="submit" >Submit</button>
            </div>
            <div>
            <a class="canc" href="index.php">cancel</a>
            </div>
        </form>
    </div>
    






</body>
</html>