<?php

	$navbarNavClasses = "";
	if ($homepage) {
		$navbarNavClasses = "on-cover";
	} else if ($transparentNavbar) {
		$navbarNavClasses = "navbar-transparent";
	}
	
	$navbarToggleOnclick = "";
	if ($homepage || $transparentNavbar) {
		$navbarToggleOnclick = "onclick=\"navbarCheckDropdown('".$navbarNavClasses."')\"";
	}
?>

<div id="navbar">
	<nav class="navbar navbar-default navbar-fixed-top <?= $navbarNavClasses ?>">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" id="navbar-mobile-toggle" class="navbar-toggle collapsed" <?= $navbarToggleOnclick ?> data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">UBC Recovery</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/about.php">About</a></li>
					<li><a href="/itemlist.php">Item List</a></li>
					<li><a href="/contact.php">Contact Us</a></li>
					<li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdOiLzWi0nly5yL0Dt5_qFcLHVuBOXld_IT6w3rOfEDDoIYYA/viewform?c=0&w=1" target="_blank">Request Items</a></li>
					<!--
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Text</a></li>
							<li><a href="#">Text</a></li>
							<li><a href="#">Text</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Text</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Text</a></li>
						</ul>
					</li>
					-->
				</ul>
				<!--
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				-->
				<ul class="nav navbar-nav navbar-right">
					<!--
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
					-->
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div>
