<?php
	include_once 'php/settings.php';
	$homepage = true;
?>

<!DOCTYPE html>
<!-- UBC BGP Website Template Version 0.1 -->
<html>
<head>
	<?php include_once 'php/html-fragments/html-head.php'; ?>

	<script src="js/homepage.js"></script>

	<title>The UBC Biomedical Equipment Recovery Project</title>
</head>
<body>
	<?php include_once 'php/html-fragments/navbar.php' ?>

	<div id="content-main">
		<div id="cover-page" class="no-bottom-margin">
			<div class="jumbotron">
				<div class="container">
					<h2>The UBC Biomedical Equipment Recovery Project</h2>
					<h4>A student-led initiative to donate discarded books and equipment from the UBC Biomedical Faculty.</h4>
				</div>
			</div>
		</div>
		<div class="content-full-height no-bottom-margin vertical-center" style="background-color: rgb(94, 105, 132);">
			<div class="container" style="color: #ffffff;">
				<h1>About the Project</h1>
				<p>Following an equipment upgrade at the biomedical faculty at the University of British Columbia, a lot of the old equipment, books, and other resources were left over without use. The original plan at UBC was to simply throw all of this away, however, that plan was soon replaced by a proposal to recover and repurpose this equipment. This is the UBC Biomedical Equipment Recovery project, an initiative to reuse old but still very functional scientific equipment and to prevent them from going to waste.</p>
				<p><a href="about.php" style="color: #c1c1c1;">Learn more about our project.</a></p>
				<h2>How We Can Help You</h2>
				<p>If you manage a school or other educational organisation in need of scientific equipment, consider taking a look at the list of available resources. If you find that you are able to use some of the available resources, contact us and we can arrange for you to pick them up.</p>
			</div>
		</div>

		<div class="container content-media" style="padding-top: 10vh;padding-bottom: 10vh;">
			<div class="row">
				<p>You can contact us directly at <a href="mailto:<?php echo $contactInformation["email"] ?>"><?php echo $contactInformation["email"] ?></a> if you are interested, and we can give you a summary of the available items over email.</p>
				<p>You can also see our <a herf="/itemlist.php">item list</a>.</p>
				
				<br />
				<p>If you would like to contact us about ordering items for your school or institution, fill out the form <a href="https://docs.google.com/forms/d/e/1FAIpQLSdOiLzWi0nly5yL0Dt5_qFcLHVuBOXld_IT6w3rOfEDDoIYYA/viewform?c=0&w=1" target="_blank">here</a>.</p>
			</div>
		</div>

		<!--
		<div class="container content-media">
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-12">
					<a href="#">
						<img class="media-object" src="img/test/test-image-grey.png" alt="Test Image" style="width: 100%;">
					</a>
				</div>
				<div class="col-md-8 col-sm-7 col-xs-12">
					<h2>Heading</h2>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-12">
					<a href="#">
						<img class="media-object" src="img/test/test-image-grey.png" alt="Test Image" style="width: 100%;">
					</a>
				</div>
				<div class="col-md-8 col-sm-7 col-xs-12">
					<h2>Heading</h2>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-12">
					<a href="#">
						<img class="media-object" src="img/test/test-image-grey.png" alt="Test Image" style="width: 100%;">
					</a>
				</div>
				<div class="col-md-8 col-sm-7 col-xs-12">
					<h2>Heading</h2>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
					<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
				</div>
			</div>
		</div>
		-->
	</div>
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
