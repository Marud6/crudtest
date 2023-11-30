<?php
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

if($_SERVER["REQUEST_METHOD"]=="POST")
try{
    $content=htmlspecialchars($_POST["content"]);
    $name=htmlspecialchars($_POST["name"]);

}
catch (Error){
echo("no")    ;
}



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
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div>
        <h1>New blok</h1>
        <form method="post">
        <div class="input-group mb-3">
  <span class="input-group-text">New blok</span>
  <input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder=" Name">
  <input type="text" class="form-control"  name="content" value="<?php echo $content;?>" placeholder="content">
  <button class="btn btn-success" type="submit" >Submit</button>

</div>






           
            <a class="btn btn-danger" href="index.php">cancel</a>
        </form>
    </div>
    
</body>
</html>
