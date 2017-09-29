<?php


// Ermittel alle Streams die angezeigt werden soll
$aStreams = [];
if (isset($_GET["streams"])) {

	foreach (explode("/", $_GET["streams"]) AS $sGetStreamname) {
		$sGetStreamname = trim($sGetStreamname);
		if ($sGetStreamname != "") {
			array_push($aStreams, $sGetStreamname);
		}
	}
}


require_once "../view/stream.php";