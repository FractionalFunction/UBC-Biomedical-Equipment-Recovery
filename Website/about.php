<?php
	include_once 'php/settings.php';
	
	$teamMembers = array(
		// Add team members here (as strings)
		"Null",
		"Example",
		"Named Person",
	);
	
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'php/html-fragments/html-head.php'; ?>

	<script src="js/subpage.js"></script>

	<title>About Us</title>
</head>
<body>
	<?php include_once 'php/html-fragments/navbar.php' ?>

	<div id="content-main">
		<div class="container content-subpage">
			<div class="page-header">
				<h1>About us</h1>
			</div>
			<p>The entire UBC Equipment Recovery Project is a non-profit charity organized and run by students of Sir Winston Churchill Secondary. We intend to bring other educational institutions to the standard that we enjoy at our own school by refurbishing and distributing biomedical and educational equipment that UBC no longer has a need for. We plan to enrich the educational experiences of students less fortunate than us.</p>
			<hr />

			<small>Copyright (C) 2017 Nicolas Mattes</small>
			
			
			<hr />
			
			<h2>Team Members</h2>
			<p>These are some of the Sir Winston Churchill Secondary IB students that contribute to this project. Some contributors wished to remain anonymous and were not included.</p>
			<ul>
				<?php

				foreach ($teamMembers as &$teamMember) {
					echo "<li>$teamMember</li>";
				}

				unset($teamMember);
				?>
			</ul>

		</div>
	</div>
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
