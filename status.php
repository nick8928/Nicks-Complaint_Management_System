<?php  
include 'config.php';

//$id = $_GET["id"];
    //echo $id;


@$id=$_GET["id"];  
@$b=$_POST['status'];  
if(@$_POST['submit'])  
{  
  $s="UPDATE users SET status='$b' WHERE id='$id'";  
echo "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
<strong>Updated</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";  
mysqli_query($conn,$s);  
}  

$sql = "select * from users where id = '$id'";

    
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
    
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);
       
    }   
?>   
<html lang="en">  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<body>  
  <div class="container">
<form method="post">
<div class="mb-3">  
<label for="exampleInputEmail1" class="form-label">ID</label>  
<input  class="form-control" type="text" name="id" value="<?php echo $id; ?>" disabled/>
</div>
<?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
<div class="mb-3">  
<label for="exampleInputEmail1" class="form-label">Email</label>  
<input  class="form-control" type="text"  value="<?php echo $rows["email"]; ?>" disabled/>
</div>  
<label for="exampleInputEmail1" class="form-label">Status</label>  
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="viewed" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
  Viewed
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="not viewed" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    Not Viewed
  </label>
</div>
<input  class="btn btn-primary" type="submit" name="submit" value="Submit"/>  
  <a href="admin.php" class="btn btn-primary">back</a>
</form>  
</div>
<?php
              }
?>
  
</body>  
</html>  