<?php


// Ermittel alle Streams die angezeigt werden soll
$aStreams = [];
if (isset($_GET["streams"])) {

	$aStreams = explode("/", $_GET["streams"]);
}


require_once "../view/stream.php";