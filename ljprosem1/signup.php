<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $showAlert=false;
  $showError=false;
  include '_dbconnect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $exists=false;

  if(($password == $cpassword)&&$exists==false){
    $sql="INSERT INTO `users` (`username`,`password`,`dt`) VALUES ('$username','$password',current_timestamp())";
    $result=mysqli_query($con,$sql);
  
  if($result){
    $showAlert=true;
  }
}
  else{
    $showError="Password do not match";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center">
      signup to web
    </h1>

    <?php 
    if($showAlert){
   echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
    
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
';
    }

if($showError){
  echo '<div class="alert alert-warning" role="alert">
 <h4 class="alert-heading">Opps!</h4>
 <p>Aww yeah, your password not matched read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
 <hr>
   
 <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
';
}
?>

    <form action="signup.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">user name</label>
    <input type="name" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Re-Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  <button type="submit" class="btn btn-primary">singup</button>
</form>

  </div>
</body>
</html>