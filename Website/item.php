<?php
	include_once 'php/settings.php';
	
	$id = $_GET["id"];
	
	$q = $db->prepare("SELECT ID, Type, Make, Model, Image, PlugType, Description FROM MicroscopeModels WHERE ID = ?;");
	$q->bind_param("i", $id);
	$q->execute();
	$q->bind_result($m_id, $m_type, $m_make, $m_model, $m_image, $m_plug, $m_description);
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

		}
	</script>

	<title>Item</title>
</head>
<body>
	<?php include_once 'php/html-fragments/navbar.php' ?>

	<div id="content-main">
		<div class="container content-subpage">
			<?php
				while ($q->fetch()) {
			?>
				<div class="row item-page-main">
					<div class="page-header">
						<h2><?= $m_make ?> <?= $m_model ?></h2>
					</div>
					<div class="col-sm-7 col-sm-12">
						<img src="img/microscopes/<?= $m_image ?>" class="item-image-main" alt="Item Image" />
					</div>
					<div class="col-sm-5 col-sm-12">
						<h2><?= $m_make ?> <?= $m_model ?></h2>
						<p><?= $m_description ?></p>
						
					</div>
				</div>
			<?php
				}
			?>
		</div>
	</div>
	
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
