<?php
require_once('connexion.php');
	session_start();
//Si on as cliqué sur Logout
if(isset($_POST['logout'])){
	session_destroy();
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
  <div class="menu">

  </div>
  <div class="corps">

  </div>
  <div class="sidebar sideRight">
		<div class="log">
      <?php
      include('Login.php');
      ?>
    </div>
  </div>
</body>
</html>
