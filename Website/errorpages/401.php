<?php
	$transparentNavbar = true;
	include_once '../php/settings.php';
	
	http_response_code(401)
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once '../php/html-fragments/html-head.php'; ?>

	<style>
		html {
			height: 100vh;
			overflow: hidden;
		}
	</style>

	<title>401: Unauthorized</title>
</head>
<body>
	<?php include_once '../php/html-fragments/navbar.php' ?>

	<div id="content-main">
		<div class="content-full-height no-bottom-margin vertical-center" style="background-color: #eee;">
			<div class="container">
				<h1 style="font-size: 100px;">401</h1>
				<h2>You do not have permission to access the requested page.</h2>
			</div>
		</div>
</body>
</html>
