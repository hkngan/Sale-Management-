<?php
require_once('db/dbhelp.php');
// if(isset($_POST['btn-add']) && $_POST['phone_cus']!=''){
//     $phonec = $_POST['phone_cus'];
//         $sql = "select * from customer where `phone` = '$phonec'";
//         $rs = mysqli_query($con, $sql);
//         if(mysqli_num_rows($rs)>0){
//             $pointc = $_POST['point'];

//             ;
//         }else{
//            header("Location:  addCus.php");        
    
//            mysqli_close($con);
// }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link href="order.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- <div class="back"><button onclick="window.history.back()">Back</button></div> -->

<section class="product">
<div class="container">
<?php
      $sql = 'select * from product';
      $proList = executeResult($sql);
      foreach($proList as $std){
        echo '
            <div class="product-items">
               <div class="product-item">
                <img width="150px" height="150px" src="image/'.$std['image'].'" >
                        <h2>'.$std['name'].'</h2><br>
                       
                        <p>'.$std['price'].'</p>
                    <button class="addcart" >Add to cart</button>
                </div>
            </div>';
}?>
</div>
</section>
<section class="cart">
    <h2>Cart</h2>
    <form action="" method="post">
    <!-- <div class="customer-profile">
           <input type="text" id="pn_c" name="phone_cus" placeholder="PhoneNumber's Customer" required>
           </div> -->
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>SL</th>
                    <th>Choose</th>
                </tr>
            </thead>
            <tbody>  
               
            </tbody>
        </table>
        <div class="total-price">
           <p> Total: <span> </span></p>
        </div>
        <button class="btn-add" value="3" type="submit" name="btn-add">Chốt đơn</button>
    </form>
</section>

<script src="script.js"></script>
</body>
</html>
