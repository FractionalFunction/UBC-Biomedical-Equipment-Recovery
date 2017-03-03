<?php

if ($_GET["type"] === "microscope") {
	include_once "itempages/microscope.php";
} else {
	header("location: /errorpages/404.php");
}