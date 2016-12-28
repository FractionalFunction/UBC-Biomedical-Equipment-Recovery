<?php
    include_once 'php/settings.php';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include_once 'php/html-fragments/html-head.php'; ?>

    <script src="js/subpage.js"></script>
	
	<script>
		function itemDisplayImage(id) {
			var image = $(id).attr("src");
			$(".item-image-main").attr("src", image);
			$(".item-image-list img").removeClass("selected");
			$(id).addClass("selected");

		}d
	</script>
	
    <title>Item</title>
</head>
<body>
    <?php include_once 'php/html-fragments/navbar.php' ?>

    <div id="content-main">
		<div class="container content-subpage">
			<div class="row item-page-main">
				<div class="page-header">
					<h2>Test Item</h2>
				</div>
				<div class="col-sm-7 col-sm-12">
					<img src="img/test/test-image-grey.png" class="item-image-main" alt="Item Image" />
					
					<div class="item-image-list">
						<img src="img/test/test-image-grey.png" onclick="itemDisplayImage('#item-image-1')" class="selected" id="item-image-1" alt="Item Image" />
						<img src="img/test/thumbnail-placeholder.png" onclick="itemDisplayImage('#item-image-2')" class="" id="item-image-2" alt="Item Image" />
					</div>
				</div>
				<div class="col-sm-5 col-sm-12">
					<h2>Test Item</h2>
					<p>Description. This is a descriptive description that is designed to describe the item in question.</p>
					<div class="item-status">
						<span class="label label-success">Working</span>
						<span class="label label-danger">Components Missing</span>
					</div>
					<a href="" class="btn btn-default">Contact Us About This Item</a>
				</div>
			</div>
		</div>
	</div>
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
