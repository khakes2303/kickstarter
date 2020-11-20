
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="index.php"><img src="lk.png" class="rounded-circle" ></a>		
		</div>
	</div>
</div>
	<div class="col-8 mx-auto">
		<form action="insertProject.php" method="GET">
			<div class="mt-3">
				<span class="font-weight-bold">Заголовок</span>
				<input type="" name="title" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Описание</span>
				<input type="" name="description" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Необходимая сумма</span>
				<input type="" name="goal" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Обложка</span>
				<input type="" name="img" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Город</span>
				<input type="" name="place" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">User</span>
				<input type="" name="user" class="form-control">
			</div>

			<button class="btn btn-success mt-5">Добавить</button>
		</form>
	</div>	
</body>
</html>
<?php 
	$con = mysqli_connect("127.0.0.1", "root", "root", "kickstarter");
?>
