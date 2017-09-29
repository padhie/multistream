<html>
<head>
	<title>Hier stehen die Streams</title>
	<style>
		body {
			background-color: #000000;
		}
		.left {
			float: left;
		}
		.below .streamVideo {
			width: 100%;
			height: 54%;
		}
		.below .streamChat {
			width: 100%;
			height: 46%;
		}
		.site .streamVideo {
			width: 70%;
			height: 100%;
			float: left;
		}
		.site .streamChat {
			width: 30%;
			height: 100%;
			float: left;
		}
		.chat_embed {
			height: 100%;
			width: 100%;
		}
	</style>
</head>
<body>

	<?php if (count($aStreams) >= 3): ?>
		<?php require_once __DIR__."/streamList/inc.3Stream.php"; ?>
	<?php elseif (file_exists(__DIR__."/streamList/inc.".count($aStreams)."Stream.php")): ?>
		<?php require_once __DIR__."/streamList/inc.".count($aStreams)."Stream.php"; ?>
	<?php else: ?>
		<?php require_once __DIR__."/inc.notFound.php"; ?>
	<?php endif; ?>

</body>
</html>