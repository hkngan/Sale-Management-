<?php
require 'db/connect.php';
if(isset($_POST["btn-log"]) && $_POST["username"] != '' && 
$_POST["password"] != ''){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user where u_name=\"$username\" and pw=\"$password\"";
    // echo $sql;
    $rs = mysqli_query($con, $sql);
if(mysqli_num_rows($rs)>0){
    header ("Location: index.php");
}else{
    echo "That bai {$sql}".$con->error;
}
mysqli_close($con);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="overlay">
        <form method="POST" action="login.php">
           <div class="container">
           <header class="head-form">
              <h2>Log In</h2>
              <p>login here using your username and password</p>
           </header>
           <br>
           <div class="field-set">
                 <input class="form-input" id="un" name="username" type="text" placeholder="@UserName" required>
              <br>
              <input class="form-input" type="password" name="password" placeholder="Password" id="pwd"  name="password" required>
              <br>
              <button class="log-in" name="btn-log"> Log In </button>
           </div>
          
           <div class="other">
            <a href="signup.php">Register</a>
            <a href="forgotpass.php">Forgot password</a>
           </div>

          </div>
          
        </form>
        </div>
</body>
</html>
<?php
session_start();
error_reporting(0);
require 'db/connect.php';
if(isset($_POST["btn-log"]) && $_POST["username"] != '' && 
$_POST["password"] != ''){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user where u_name=\"$username\" and pw=\"$password\"";
    $query = mysqli_query($con, $sql );
    $ret=mysqli_fetch_array($query);
if($ret>0){
    $_SESSION['id']=$ret['ID'];
    header ("Location: index.php");
}else{
    echo"Invalid Details.";
}
}