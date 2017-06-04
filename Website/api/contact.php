<?php

$api = true;

include_once '../php/settings.php';

$status = array(
	"submitted" => true,
);

$requiredFields = array("Email", "Message");
$missingFields = array();

foreach ($requiredFelds as $field) {
	if (!isset($_POST[$field]) || empty($_POST[$field])) {
		array_push($missingFields, $field);
	}
}

if (count($missingFields) > 0) {
	$status = array(
		"submitted" => false,
		"message" => "The outlined fields are required.",
		"missing_fields" => $missingFields,
	);
	echo json_encode($status);
	exit();
}