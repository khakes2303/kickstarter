<?php 
	
	$connect = mysqli_connect('127.0.0.1', 'root', 'root', 'kickstarter') or die("Ошибка" . mysqli_error($connect));

	$delete = "DELETE FROM project WHERE id='{$_GET['id']}'";
 	mysqli_query($connect, $delete);

	$select = "SELECT * FROM project";
	$query = mysqli_query($connect,$select);

 ?>