<?php
	session_start();
	error_reporting(0);
	include "connection.php";
	if(isset($_POST['submit'])){
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
	if($_POST['name'] == '' || $_POST['email'] == '' || $_POST['password'] == ''){
		$_SESSION['error'] = "All fields are required";
	} else {
		$stmt = $pdo->prepare('INSERT INTO signup (Firstname, Email, Password) VALUES (:name, :email, :password)');
		$stmt->execute(array(
			':name' => $_POST['name'],
			':email' => $_POST['email'],
			':password' => $_POST['password']));
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="starter-template.css" rel="stylesheet">
</head>
<body><br>
	<div class="row">
	<div class="col-lg-4">
		<form method="post">
		<div class="card">
			<div class="card-header bg-dark text-center text-white">
				<h1>Create Account</h1>
			</div><br>
					<p style="color:#ff0000"><?php echo $_SESSION['error'] ?></p>
					<label>Name</label>
					<input type="text"  class="form-control" name="name">
					<label>Email</label>
					<input type="text" class="form-control" name="email">
					<label>Password</label>
					<input type="text" class="form-control" name="password"><br>
					<button class="btn btn-success" name="submit">Submit</button>
				</div>
				</form><br>
	</div>
</div><br><br>
</body>
</html>