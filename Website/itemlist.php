<?php
	include_once 'php/settings.php';
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once 'php/html-fragments/html-head.php'; ?>

	<script src="js/subpage.js"></script>

	<title>Item List</title>
</head>
<body>
	<?php include_once 'php/html-fragments/navbar.php' ?>

	<div id="content-main">
		<div class="container content-subpage">
			<div class="page-header">
				<h1>Available Items</h1>
			</div>

			<div class="row">
				
				<?php
				$sql = $db->query("SELECT * FROM MicroscopeModels;");

				if ($sql->num_rows > 0) {
					while($microscopeModel = $sql->fetch_assoc()) {
						?>
							<div class="item-thumbnail col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="thumbnail">
									<img src="img/test/test-image-grey.png" alt="Item Thumbnail">
									<div class="caption">
										<h4><?= $microscopeModel["Make"] ?> <?= $microscopeModel["Model"] ?></h4>
										<p><?= $microscopeModel["Type"] ?></p>
										<p><?= $microscopeModel["Description"] ?></p>
										<p><a href="/item.php?id=<?= $microscopeModel["ID"] ?>&type=microscope" class="btn btn-primary" role="button">More Information</a></p>
									</div>
								</div>
							</div>
						<?php
					}
				} else {
					echo "<p>There are no available items.</p>";
				}

				?>

			</div>
		</div>
	</div>
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
