<?php 
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIDTERM</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
      <link rel="stylesheet" href="./CSS/styles.css">
</head>

<body>
  

    <!-- ALERT/NOTIF -->
    <div class="container-md mt-1">
      <div class="row ">
        <div class="col-md-3 mx-auto">

      <?php 
      
      
                       if(isset($_GET['update_status'])){
                            switch($_GET['update_status']){
                                case "success": echo "<div class='alert alert-success'>Item Updated.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>Item Failed to be updated.</div>";
                                      break;
                                        
                            }
                       }
                       if(isset($_GET['new_item'])){
                            switch($_GET['new_item']){
                                case "added": echo "<div class='alert alert-success'>Item Added.</div>";
                                // Clear form inputs
                                $name = '';
                                $price = '';
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>Item Not Added</div>";
                                      break;
                                        
                            }
                       }
                  
      ?>
        </div>
      </div>

    </div>
      <!-- Display Section -->
      <section class="container display-container shadow mt-5 rounded bg-white">

      <h1 class="title">Internet Technologies Midterms</h1>
      <div class="btn-container d-flex align-items-center justify-content-center">
        <a href="./add_item.php" role="button" class="btn btn-outline-primary me-3">New Product</a>
        <a href="./OrderingModule/order_list.php" role="button" class="btn btn-outline-primary me-3">See Orders</a>
        <a href="./OrderingModule/shop.php" role="button" class="btn btn-outline-primary">Shop Page</a>
      </div>

      
      
        <h3 class="section-title pt-3">All Products</h3>
        

      <!-- Display -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $itemlist = query($conn, "select item_id, item_name, item_price from products where item_status='A'");
          
            foreach($itemlist as $items => $row){

              echo '<tr>';
              echo    '<th scope="row">'.$row['item_name'].'</th>';
              echo   '<td>'.$row['item_price'].'</td>';
              echo '<td><a href="./update_item.php?item_name=' . $row['item_name'] .'&item_price=' .$row['item_price'] . '&item_id='. $row['item_id'].'" role="button" class="btn btn-success">Update</a>
                    <a class="btn btn-danger" href="delete.php?item_id='. $row['item_id'] . '"> Delete </a>
                      </td>';

               echo    '</tr>';
            }


          ?>

          
        </tbody>
      </table>
    </section>
  


</body>
</html>