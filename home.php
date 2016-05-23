<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
	<head>
		<?php include ('head.php'); ?>
	</head>
	
	<body>
		<!--Sets variable that navbar.php pulls to tell what page it's on-->
		<script> var pageID = "home"; </script>
		<!--calls navbar.php and shows navbar on page-->
		<?php require ('navbar.php'); ?>
		<!--Body of page-->
		<div>

			<header>
				<h1>Home</h1>
			</header>
			
		</div>
	</body>
</html>