<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
	<head>
		<?php include ('head.php'); ?>
	</head>
	
	<body>
		<!--Sets variable that navbar.php pulls to tell what page it's on-->
		<script> var pageID = "home"; </script>
		<!--Body of page-->
		<div class="sample5">

			<header>
				<h1>Home</h1>
			</header>
			<div class="nav">
				<!--calls navbar.php and shows navbar on page-->
				<?php require ('navbar.php'); ?>
			</div>
			
			<div class="content">
				<div class="col1">
				
				</div>
				<div class="col2">
				
				</div>
				<div class="col3">
				
				</div>
			</div>
			
			<div class="footer">
			
			</div>
		</div>
	</body>
</html>