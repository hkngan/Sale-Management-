<?php
require_once('db/dbhelp.php');
if(isset($_POST['btn-add'])){
  $fn = $_POST['name'];
  $gder = $_POST['type'];
  $phone_num = $_POST['phone_num'];
  $email = $_POST['email'];
  $address = $_POST['add'];
  $bd = $_POST['bd'];
  $point = $_POST['point'];
  if(!empty($fn) && !empty($gder) && !empty($phone_num) && !empty($email) && !empty($address) && $point>=0){
    $sql = "insert into customer (`f_name`, `gder`, `phone`, `email`, `address`, `bday`, `point`)
    values ('$fn', '$gder', '$phone_num', '$email', '$address', '$bd', '$point')";
    if($con->query($sql)===TRUE){
        header("Location: listcus.php");
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
    <div class="container-fluid">
        <form action="" method="post">
            <header class="head-form">
                <h2>Customer Register</h2>
            </header>
            <br>
            <div class="form">
                <div>
                    <input type="text" class="form-input" id="fn" name="name"  placeholder="Full Name" required>
                </div>
                <div class="form-input" >
                    <input type="radio"  name="type" id="type" value="Male" required>Nam
                    <input type="radio"  name="type" id="type" value="Female" required>Nữ
                </div>
                <div>
                    <input type="text" class="form-input" id="pn" name="phone_num" placeholder="Phone Number" required>
                </div>
                <div>
                    <input type="text" class="form-input" id="e" name="email" placeholder="Email" required>
                </div>
                <div>
                    <input type="text" class="form-input" id="add" name="add" placeholder="Adress" required> <br>
                </div>
                <div>
                    <lable class="form-input">Date of birth</lable></lable>
                    <input type="date" class="form-input" id="bd" name="bd" required> <br>
                </div>
                <div>
                    <input type="text" class="form-input" id="point" name="point" placeholder="Point" required> <br>
                </div>
                <div class="form-action">
                    <button class="btn-add" type="submit" name="btn-add">Add</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>