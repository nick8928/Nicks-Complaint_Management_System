<?php
include_once 'config.php';


$sql = "select * from users";

    
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
    
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);
       
    }   

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    

    <h2 align="center">Admin</h2><a class="btn btn-primary btn-sm" href="index.php">back</a>
    

    <table class="table">
        <tr>
            <th>ID</th>
            <th>E-mail</th>
            <th>Complaint</th>
            <th>Status</th>
            <th>view</th>
            <th>Action</th>
        </tr>
        
        
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
        <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><a href="complaint.php?id=<?php echo $rows["id"]; ?>">View</a></td>
            <td><a href="status.php?id=<?php echo $rows["id"]; ?>">Status</a></td>
            <td><?php if($rows['status']=='viewed'){
              echo "<input class='btn btn-success btn-sm' value='viewed' disabled>";
            } 
            else{
              echo "<input class='btn btn-danger btn-sm' value='not viewed' disabled>";
            }
            ?></td>
            <td><a href="delete-process.php?id=<?php echo $rows["id"]; ?>">Delete</a></td>
        </tr>
            <?php } ?>
            
    </table>
    <?php
      
      

    ?>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

