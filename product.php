<?php
require_once('db/dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="./css/pro.css" rel="stylesheet">
    <title>Document</title>


</head>

<body>
    <div class="container-fluid">
        <table class="table table-hover">
            <div class="card-header">
                <h1 style="aligh: center">LIST OF PRODUCT</h1>
            </div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Amount</th>
                    <th scope="col">DV</th>
                    <th scope="col">Price</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
      $sql = 'select * from product';
      $proList = executeResult($sql);
      $index =1;
      foreach($proList as $std){
          echo ' <tr>
          <td >'.($index++).'</td>
          <td >'.$std['name'].'</td>
          <td ><img width="150px" height="150px" src="image/'.$std['image'].'" ></td>
          <td >'.$std['slg'].'</td>
          <td >'.$std['donvi'].'</td>
          <td >'.$std['price'].'</td>
          <td><button class="btn btn-dark" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'>Edit</button></td>
		  <td><button class="btn btn-light" onclick="deletePro('.$std['id'].')">Delete</button></td>
        </tr>';
      }?>

            </tbody>
        </table>
        <button class="btn btn-light "name="btn-add" onclick="dieu_huong()" >Thêm</button>
    </div>

    <script type="text/javascript">
    function deletePro(id) {
        option = confirm('Bạn có muốn xoá sản phẩm này không')
        if (!option) {
            return;
        }

        console.log(id)
        $.post('delPro.php', {
            'id': id
        }, function(data) {
            alert(data)
            location.reload()
        })
    }
    </script>
    <script type="text/javascript">
        function dieu_huong(){
            location.assign("addPro.php");
        }
    </script>
</body>

</html>