<?php require 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awe some.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1" cellspacing=0 cellpadding=20>
    <!-- <tr>
      <td>#</td>
      <td>Name</td>
      <td>Image</td>
    </tr> -->

    
      <?php
        $i=1;
        $rows = mysqli_query($conn,"SELECT * FROM tb_upload ORDER BY id DESC");
      ?>
      <?php foreach($rows as $row) : ?>
        <!-- <tr>
          <td><?php echo $i++; ?></td>
          <td> <?php echo $row["name"]; ?> </td>
          <td> alt=""></td>
        </tr>
         -->
        <div className='container'>
          <div class="row">
            
            <div class="card col-4" style="width: 18rem;">
              <img src="img/<?php echo $row['image'];?>"class="card-img-top f1" alt="..."/>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary"><Link>go</Link></a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
    </tr>
  </table>
</body>
</html>