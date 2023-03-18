<?php
if (isset($_POST['btn-add'])) {
	$name = $_POST['product_name'];
   $am = $_POST['amount'];
   $total = $_POST['totalprice'];
   $date = $_POST['noteDate'];
	require_once ('dbhelp.php');
	$sql = 'insert into order_detail where id = '.$id;
	execute($sql);

	echo 'Xoá thành công';
}