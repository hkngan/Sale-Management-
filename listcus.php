<?php
require_once('db/dbhelp.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="cus.css" rel="stylesheet">
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
      <th scope="col">FullName</th>
      <th scope="col">Gender</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Emailr</th>
      <th scope="col">Address</th>
      <th scope="col">Birthday</th>
      <th scope="col" name="point" id="point">Cumulative Point</th>
      <th>Delete</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = 'select * from customer';
      $cusList = executeResult($sql);
      $index =1;
      foreach($cusList as $std){
          echo ' <tr>
          <td >'.($index++).'</td>
          <td >'.$std['f_name'].'</td>
          <td >'.$std['gder'].'</td>
          <td >'.$std['phone'].'</td>
          <td >'.$std['email'].'</td>
          <td >'.$std['address'].'</td>
          <td >'.$std['bday'].'</td>
          <td >'.$std['point'].'</td>
          <td><button class="btn btn-light" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'>Edit</button></td>
			<td><button class="btn btn-dark" onclick="deleteCus('.$std['id'].')">Delete</button></td>
        </tr>';
      }?>
  
  </tbody>
</table>
<button class="btn btn-light "name="btn-add" onclick="dieu_huong()"">Thêm</button>
  </div>

<script type="text/javascript">
		function deleteCus(id) {
			option = confirm('Bạn có muốn xoá khách hàng này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delCus.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
  <script type="text/javascript">
        function dieu_huong(){
            location.assign("addCus.php");
        }
    </script>
</body>
</html>