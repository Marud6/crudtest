<!DOCTYPE html>
<?php
include"./compheader.php";
echo createHeader();
?>
<body class="container-fluid">

    <div>
        <h2>Blocks</h2>
        <a class="btn btn-info" href="create.php" role="button">New+</a>
    </div>
    <table class="table table-striped">
        <thead>
        
            <th>Name</th>
            <th>Content</th>
            <th>Function</th>

            
          
        </thead>
        <tbody>
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
   
   $sql="SELECT * FROM bloks";
   $res= $mysql->query($sql);
   if(!$res) echo("dont work");
   while($row =$res->fetch_assoc()){
    echo"
    <tr>
    
    <td>$row[name]</td>
    <td>$row[content]</td>
    <td>
        <a class='btn btn-success' href='edit.php?id=$row[id]'>edit</a>
        <a class='btn btn-danger' href='delete.php?id=$row[id]'>delete</a>
        <a class='btn btn-primary' href='view.php?id=$row[id]'>view</a>
    </td>
    
    </tr>";
    

}





            ?>
            
        
        </tbody>
    </table>
    
</body>
</html>

