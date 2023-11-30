<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container-fluid">
    <div>
        <h2>Blocks</h2>
        <a class="btn btn-primary" href="view.php" role="button">view blocks</a>
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
        <a class='btn btn-success' href='edit.php?id=$row[id]'>edit</a>
        <a class='btn btn-danger' href='delete.php?id=$row[id]'>delete</a>
    </td>
    
    </tr>";
    

}





            ?>
            
        
        </tbody>
    </table>
    
</body>
</html>

