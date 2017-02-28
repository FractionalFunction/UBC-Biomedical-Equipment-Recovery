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
			<hr />
			<div class="col col-sm-8 col-xs-12">
				<p>You can also contact us through the website, using the form below.</p>
				<form id="contact-form" onsubmit="return false">
					<div class="form-group">
						<label for="contact-Name">Name (Optional)</label>
						<input class="form-control" id="contact-Name" type="text" name="Name" placeholder="Your Name" />
					</div>
					<div class="form-group">
						<label for="contact-Email">Email (Required)</label>
						<input class="form-control" id="contact-Email" type="email" name="Email" placeholder="you@example.com" />
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Your Message (Required)</label>
						<textarea form="contact-form" class="form-control" id="contact-Message" rows="3" name="Message"></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Send" />
					<span id="contact-form-message" class="form-message"></span>
				</form>
			</div>
		</div>
	</div>
	
	<?php include_once 'php/html-fragments/footer.php'; ?>
	
	<script src="js/contact.js"></script>
	
</body>
</html>
