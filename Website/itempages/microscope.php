<?php
	include_once 'php/settings.php';
	
	$id = $_GET["id"];
	
	$q = $db->prepare("SELECT ID, Type, Make, Model, Image, PlugType, Description FROM MicroscopeModels WHERE ID = ?;");
	$q->bind_param("i", $id);
	$q->execute();
	$q->bind_result($m_id, $m_type, $m_make, $m_model, $m_image, $m_plug, $m_description);
	
	while ($q->fetch()) {
		$m = array(
			"ID" => $m_id,
			"Type" => $m_type,
			"Make" => $m_make,
			"Model" => $m_model,
			"Image" => $m_image,
			"Plug" => $m_plug,
			"Description" => $m_description,
		);
	}
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
			<div class="row item-page-main">
				<div class="page-header">
					<h2><?= $m["Make"] ?> <?= $m["Model"] ?></h2>
				</div>
				<div class="col-sm-7 col-sm-12">
					<img src="img/microscopes/<?= $m["Image"] ?>" class="item-image-main" alt="Item Image" />
				</div>
				<div class="col-sm-5 col-sm-12">
					<h2><?= $m["Make"] ?> <?= $m["Model"] ?></h2>
					<p><?= $m["Description"] ?></p>
					
				</div>
				
				<div class="col-xs-12" style="margin-top: 25px;">
					<table class="table">
						<thead class="thead-default">
							<tr>
								<th>ID</th>
								<th>Status</th>
								<th>Condition</th>
							</tr>
						</thead>
						<tbody>
							<?php
							/* This is not a prepared statement because the id is being provided by
							 * an existing database entry.
							 *
							 * Just make sure that the entry in question (which should not be user-editable)
							 * does not contain any injection code.
							 */
							$sql = $db->query("SELECT * FROM Microscopes WHERE Model = ".$m["ID"]." AND Visibility = 1;");
							
							echo "<h3>Available Units: $sql->num_rows</h3>";
							if ($sql->num_rows > 0) {
								while($microscope = $sql->fetch_assoc()) {
									?>
										<tr>
											<th scope="row"><?= $microscope["ID"] ?></th>
											<td><?= $microscope["Status"] ?></td>
											<td><?= $microscope["Condition"] ?></td>
										</tr>
									<?php
								}
							} else {
								echo '<tr>
										<th scope="row">There are no available units.</th>
										<td></td>
										<td></td>
									</tr>';
							}
									?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<?php include_once 'php/html-fragments/footer.php'; ?>
</body>
</html>
