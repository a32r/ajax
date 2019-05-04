<?php require_once("php/functions.php"); ?>
<?php require_once("php/db_connect.php"); ?>
<?php require_once("php/db_save.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Bootstrap ajax test</title>
</head>
<body>
	<form id="form" action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST"></form>
	<div class="wrapper">
		<div class="container upper">
			<div class="row">
				<div class="col">
					<img id="logo" src="img/logo.png">
				</div>
			</div>
			<div class="row justify-content-center">
				<img id="mail" src="img/mail.png">
			</div>
			<div class="row">
				<div class="col form">
					<div class="row">
						<div class="col">
							<label class="w-100" for="name">Имя <span>*</span></label>
							<input form="form" name="name" id="name" type="text">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label class="w-100" for="email">E-Mail <span>*</span></label>
							<input form="form" name="email" id="email" type="text">
						</div>
					</div>
				</div>
				<div class="col">
					<label class="w-100" for="comment">Комментарий <span>*</span></label>
					<textarea form="form" name="comment" id="comment" cols="40" rows="7"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input form="form" class="btn btn-danger btn-lg" type="submit" value="Записать">
				</div>
			</div>
		</div>
	</div>
	<div class="container center">
		<div class="row justify-content-center">Выводим комментарии</div>
		<div class="row">
			<?php require_once("php/db_get.php"); ?>
		</div>
	</div>
	<footer>
		<div class="container footer">
			<div class="row">
				<div class="col">
					<img src="img/logo.png">
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.4.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
