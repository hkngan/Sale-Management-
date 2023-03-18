<?php
require_once('db/dbhelp.php');
if(isset($_POST['btn-add'])){
  $name = $_POST['name'];
  $file = $_POST['file'];
  $slg = $_POST['amount'];
  $dv = $_POST['dv'];
  $price = $_POST['pr'];
  if(!empty($name) && !empty($file) && !empty($slg) && !empty($dv) && !empty($price)){
    $sql = "insert into product (`name`, `image`, `slg`, `donvi`, `price`)
    values ('$name', '$file', '$slg', '$dv', '$price')";
    if($con->query($sql)===TRUE){
        header("Location: product.php");
    }else{
        echo "That bai {$sql}".$con->error;
    }
  }
  else{
    echo "
        <script>alert('Bạn cần nhập đủ thông tin!')</script>
    ";
  }
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="add.css">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Trang chủ</a>
    <div class="container-fluid">
        <form action="" method="post">
            <header class="head-form">
                <h2>ADD PRODUCT</h2>
            </header>
            <br>
            <div class="form">
                <div>
                <lable class="form-input">Product Name</lable>
                    <input type="text" class="form-input" id="fn" name="name" required>
                </div>
                <div>
                <lable class="form-input">Image File</lable>
                    <input type="file" class="form-input" id="file" name="file" required>
                </div>
                <div>
                <lable class="form-input">Amount</lable>
                    <input type="text" class="form-input" id="slg" name="amount" required>
                </div>
                <div>
                <lable class="form-input">DV</lable>
                    <input type="text" class="form-input" id="dv" name="dv" required> <br>
                </div>
                <div>
                    <lable class="form-input">Price</lable>
                    <input type="text" class="form-input" id="pr" name="pr" required> <br>
                </div>
                <div class="form-action">
                    <button class="btn-add" name="btn-add" type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>