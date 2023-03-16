<?php
include_once 'connect.php';




    if(isset($_POST['name'])){
    $n_name=$_POST['name'];
    $n_price=$_POST['price'];
    
    $table = "products";
    $fields = array('item_name' => $n_name
                   , 'item_price' => $n_price
                   );
    
    if(insert($conn, $table, $fields) ){
        header("location: index.php?new_item=added");
        exit();
    }  
    else{
        header("location: index.php?new_item=failed");
        exit();
    }
}