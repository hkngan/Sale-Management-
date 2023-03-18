<?php
require 'db/connect.php';
if(isset($_POST['btn-reg'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $question = $_POST['question'];
    // $answer = $_POST['answer'];
    // && !empty($question) && !empty($answer)
    if(!empty($fullname) && !empty($username) && !empty($password) ){
        $sql= "INSERT INTO user (`f_name`, `u_name`, `pw`) VALUES ('$fullname', '$username',
        '$password')";
        // header("Location: login.php");
    if($con->query($sql)===TRUE){
        header("Location: login.php");
    }else{
        echo "That bai {$sql}".$con->error;
    }
}
    else{
        echo("Ban can nhap day du thong tin!");
    }
} 
mysqli_close($con);
?>