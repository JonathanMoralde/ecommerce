<?php 

include_once 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./CSS/styles.css">
</head>
<body>
   

        <div class="container my-5 py-5 bg-white shadow rounded w-50">
            <h3 class="section-title text-center mb-3 text-uppercase">Add New Product</h3>
            
            <div class="row">
                <div class="col-md-6 mx-auto">
    
                <!-- add Form -->
                    <form action="./new_item.php" method="post">
                        <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                        <label for="floatingInput">Product Name</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPrice" placeholder="Price" name="price" value="<?php echo isset($_POST['price']) ? $_POST['name'] : ''; ?>">
                        <label for="floatingPrice">Price</label>
                        </div>
                        <!-- Submit -->
                        <div class="btn-container d-flex justify-content-center ">
                            <a href="./index.php" class="btn btn-secondary me-3 text-uppercase">Cancel</a>
                            <button type="submit" class="btn btn-primary text-uppercase" name="submit">Add New</button>
                        </div>
                    </form>
    
                </div>
            </div>
    
        </div>
    

</body>
</html>