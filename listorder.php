<?php
require_once('db/dbhelp.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
  <table class="table table-hover">
<div class="card-header">
            <h1>LIST OF CUSTOMERS</h1>
        </div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Staff ID</th>
      <th scope="col">Staff name</th>
      <th scope="col">PhoneNumber's Customer</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
      <th>Delete</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
      <!-- <?php
      // $sql = 'select * from transaction';
      // $billList = executeResult($sql);
      // $index =1;
      // foreach($billList as $std){
      //     echo ' <tr>
      //     <td >'.($index++).'</td>
      //     <td >'.$std[''].'</td>
      //     <td >'.$std['gder'].'</td>
      //     <td >'.$std['phone'].'</td>
      //     <td >'.$std['email'].'</td>
      //     <td >'.$std['address'].'</td>
      //     <td >'.$std['bday'].'</td>
      //     <td >'.$std['point'].'</td>
      //     <td><button class="btn btn-light" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'>Edit</button></td>
			// <td><button class="btn btn-dark" onclick="deleteCus('.$std['id'].')">Delete</button></td>
      //   </tr>';
      // }?> -->
  
  </tbody>
</table>
</div>
</body>
</html>