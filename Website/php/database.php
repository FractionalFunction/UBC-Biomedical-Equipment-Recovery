<?php

$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if ($db->connect_error) {

?>

<?php 
	// The error page that is displayed for database errors
	// There were problems with importing this as a separate file from the errorpages folder
	// TODO: Move this to a separate file.
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'html-fragments/html-head.php'; ?>

	<style>
		html {
			height: 100vh;
			overflow: hidden;
		}
	</style>

	<title>Database Connection Error</title>
</head>
<body>

	<div id="content-main">
		<div class="content-full-height no-bottom-margin vertical-center" style="background-color: #eee;">
			<div class="container">
				<h1 style="font-size: 50px;">Database Connection Error</h1>
				<h2>There was an error when connecting to the database.</h2>
				<?php
					if (DEBUG) {
						echo "<p style=\"white-space: pre-wrap;\">$db->connect_error</p>";
					}
				?>
			</div>
		</div>
</body>
</html>

<?php
	exit();
}