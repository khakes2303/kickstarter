<?php 

	$con = mysqli_connect("127.0.0.1", "root", "root", "kickstarter");

	mysqli_query($con, "INSERT INTO project (title, description, goal, img, place, user, donated) VALUES ('".$_GET['title']."', '".$_GET['description']."', '".$_GET['goal']."','".$_GET['img']."', '".$_GET['place']."', '".$_GET['user']."', 0)");

	header('Location: http://31urok/account.php');	

 ?>