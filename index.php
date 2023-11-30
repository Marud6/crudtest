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
        <h2>Blocks</h2>
        <a class="but" href="view.php" role="button">view blocks</a>
        <a class="but" href="create.php" role="button">New blok</a>
    </div>
    <table>
        <thead>
        
            <th>Name</th>
            <th>Content</th>
            <th>Function</th>

            
          
        </thead>
        <tbody>
            <?php 
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname=("bloky");
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
        <a class='but' href='edit.php?id=$row[id]'>edit</a>
        <a class='but' href='delete.php?id=$row[id]'>delete</a>
    </td>
    
    </tr>";
    

}





            ?>
            
        
        </tbody>
    </table>
    
</body>
</html>

