<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('db/dbhelp.php');
	$sql = 'delete from product where id = '.$id;
	execute($sql);

	echo 'Xoá thành công';
}