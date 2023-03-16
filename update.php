<?php
include_once "connect.php";


if(isset($_POST['u_itemid'])){
    $table = "products";
    
    $p_item_id  = $_POST['u_itemid'];
    $p_name = $_POST['u_name'];
    $p_price = $_POST['u_price'];
    
    
    $fields = array( 'item_name' => $p_name
                   , 'item_price' => $p_price 
                   );
    $filter = array( 'item_id' => $p_item_id );
    
   
   if( update($conn, $table, $fields, $filter )){
       header("location: index.php?update_status=success");
       exit();
   }
    else{
        header("location: index.php?update_status=failed");
        exit();
    }
 }
?>