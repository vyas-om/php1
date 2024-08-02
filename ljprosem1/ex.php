<?php
  require 'connection.php';
  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    if($_FILES["image"]["error"]===4){
      echo
      "<script> alert('iamge does not exist');</script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize=$_FILES["image"]["size"];
      $tmpName=$_FILES["image"]["tmp_name"];

      $validImageExtension =['jpg','jpeg','png'];
      $imageExtension=explode('.',$fileName);
      $imageExtension=strtolower(end($imageExtension));
      if(!in_array($imageExtension,$validImageExtension)){
        echo 
        "<script> alert('image invalid format'); </script>"
        ;
      }
      else if($fileSize>1000000){
        echo
        "<script> alert('image size is to large') </script>"
        ;
      }
      else{
        $newImageName=uniqid();
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmpName,'img/'.$newImageName);
        $query="INSERT INTO tb_upload VALUES('','$name','$newImageName')";
        mysqli_query($conn,$query);
        echo
        "<script>
          alert('success fully uploaded');
          document.location.href=:'data.php';
        </script>"
        ;
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awe some.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link href="index.css"rel="stylesheet" >
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container d-flex flex-wrap hea">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">About</a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="login.php" class="nav-link link-body-emphasis px-2">Login</a></li>
        <li class="nav-item"><a href="signup.php" class="nav-link link-body-emphasis px-2">Sign up</a></li>
      </ul>
    </div>       

    <div class="container text-center my-3">
    <div class="row">
      <div class="col-1">

      </div>
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
      <p>rooms</p>
      </div>
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>cities</p>
      </div>
      
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>Mountains</p>
      </div>
      
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>Castles</p>
      </div>
      
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>Pools</p>
      </div>
           
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>Camping</p>
      </div>
      
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>Farm</p>
      </div>
      
      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>Arctic</p>
      </div>

      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>Beach</p>
      </div>

      <div class="col-1">
      <i class="fa fa-home" style="font-size:24px"></i>
        <p>T-home</p>
      </div>
    </div>
  </div>

  <h1>Enter details to enter your hotel in website</h1>

  <form action="" class="" method="post" autocomplete="off" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="name">Details</label>
    <input type="text"class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  <a href="data.php">Enter to view your website</a>

  <div class="container foot">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top mx-3 foot">
      <p>© 2024 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
  </footer>
</body>
</html>