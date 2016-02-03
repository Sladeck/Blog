<?php
include('connexion.php');
	session_start();
//Si on as cliqué sur Logout
if(isset($_POST['logout'])){
	session_destroy();
	header("Location: Login.php");
	exit;
}
//Si on est pas passé par la page de LOGIN
if(!isset($_SESSION["logged"]) || $_SESSION['logged'] == false){
	header("Location: Login.php");
	exit;
}else{

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Des papiers dans un bol</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
<div class="formu">
	<form method="POST">
		<br><input type="number" name="guess"><br><br>
		<input type="submit"><br><br>
		<input type="submit" name="logout" value="Se déconnecter">
	</form>
</div>
</body>
</html>
