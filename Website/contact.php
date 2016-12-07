<?php
    include_once 'php/settings.php';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include_once 'php/html-fragments/html-head.php'; ?>

    <script src="js/subpage.js"></script>

    <title>Contact Us</title>
</head>
<body>
    <?php include_once 'php/html-fragments/navbar.php' ?>

    <div id="content-main">
		<div class="container content-subpage">
			<h1>Contact Us</h1>
            <span>If you would like to get in touch, we can be contacted by the following means.</span>
			<br />
			<span>Email: <a href="mailto:<?php echo $contactInformation["email"]; ?>" target="_blank"><?php echo $contactInformation["email"]; ?></a></span>
		</div>
	</div>
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
