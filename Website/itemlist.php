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
				<p>Here are all of the items that are available for request. Click the "Show" button on each section to view the types of items you are interested in. If you would like to request something for your school or institution, click the "Request Items" button in the navigation bar and fill out the form.</p>
			</div>

			<div class="row">
				
				<h3>Microscopes <button id="microscopelist-toggle" class="btn btn-primary" onclick="toggleSection('#microscopelist-toggle', '#microscopelist')">Show</button></h3>
				
				<div class="toggled-section" id="microscopelist">
					<?php
					$sql = $db->query("SELECT * FROM MicroscopeModels;");

					if ($sql->num_rows > 0) {

						echo "<div class=\"col-xs-12\"><p>$sql->num_rows Item(s)</p></div><hr />";

						while($microscopeModel = $sql->fetch_assoc()) {
							?>
								<div class="item-thumbnail col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="thumbnail">
										<img src="img/microscopes/<?= $microscopeModel["Image"] ?>" alt="Item Thumbnail">
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
			
			<hr />
			
			<div class="row">
				
				<h3>Books <button id="booklist-toggle" class="btn btn-primary" onclick="toggleSection('#booklist-toggle', '#booklist')">Show</button></h3>
				
				<div class="toggled-section" id="booklist">
					<table class="table">
							<thead class="thead-default">
								<tr>
									<th>ID</th>
									<th>ISBN-13</th>
									<th>Category</th>
									<th>Title</th>
									<th>First Author</th>
									<th>Publisher</th>
									<th>Edition</th>
									<th>Market Price</th>
									<th>Binding</th>
									<th>Condition</th>
									<th>Number of Copies</th>
									<th>Publication Date</th>
									<th>Notes</th>
								</tr>
							</thead>
							<tbody>

								<?php
								$sql = $db->query("SELECT * FROM Books WHERE Visibility = 1;");

								if ($sql->num_rows > 0) {

									echo "<div class=\"col-xs-12\"><p>$sql->num_rows Item(s)</p></div><hr />";

									while($book = $sql->fetch_assoc()) {
										?>
										<tr>
											<td><?= $book["ID"] ?></td>
											<td><?= $book["ISBN13"] ?></td>
											<td><?= $book["Category"] ?></td>
											<td><?= $book["Title"] ?></td>
											<td><?= $book["Publisher"] ?></td>
											<td><?= $book["Edition"] ?></td>
											<td><?= $book["MarketPrice"] ?></td>
											<td><?= $book["Binding"] ?></td>
											<td><?= $book["Condition"] ?></td>
											<td><?= $book["Copies"] ?></td>
											<td><?= $book["PublicationDate"] ?></td>
											<td><?= $book["Notes"] ?></td>
										</tr>
										<?php
									}
								} else {
									echo "<p>There are no available items.</p>";
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
