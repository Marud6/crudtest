<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname=("bloky");
 $mysql= new mysqli($dbhost,$dbuser,$dbpass, $dbname);
 if($mysql->connect_error) {
     echo 'connection failed';
 }
 if($content=htmlspecialchars($_POST["content"])==null){
    $_POST["name"]="";
    $_POST["content"]="";


 }






$name="";
$content="";

if($_SERVER["REQUEST_METHOD"]=="POST")

$content=htmlspecialchars($_POST["content"]);
$name=htmlspecialchars($_POST["name"]);



do{ 
    if(empty($content)||empty($name)){
        break;


    }
    $sql="INSERT INTO bloks (name, content)". 
        "VALUES ('$name','$content')";

       
       
        $res= $mysql->query($sql);
        
        header('location: index.php');  
       exit;

    

        

    
}while(false);





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>New blok</h1>
        <form method="post">
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
