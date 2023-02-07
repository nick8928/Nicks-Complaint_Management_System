<?php
include_once 'config.php';

$success = '<div class="alert alert-dark alert-dismissible fade show" role="alert">
<strong>Successful</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>'; 

$unsuccess = '<div class="alert alert-dark alert-dismissible fade show" role="alert">
<strong>Unsuccessfull</strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


  if(isset($_POST['submit']))

  {
    $email = $_POST['email'];
    $complaint = $_POST['complaint'];
    //$duplicate=mysqli_query($conn,"select * from users where email ='$email'");
    //if (mysqli_num_rows($duplicate)>0)
    //{
    //  echo $unsuccess;
    //}
    //else
    //{
      $sql = "INSERT INTO users (email,complaint) VALUES ('$email','$complaint')";
      if(mysqli_query($conn, $sql))
      {
        echo $success;
      }
    }
  

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complaint system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    

    <h2 align="center">Complaint Management System</h2>
    <form action="index.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">        
    </div>
    <div class="mb-3">
        <label for="exampleInput1" class="form-label">Complaint</label>
        <input type="text" class="form-control" name="complaint" id="exampleInput" >        
    </div>
    
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
    </form>
    <br>
    <a href='admin.php'><button class="btn btn-primary">Admin</button></a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

