<?php
    session_start();
    if (!isset($_SESSION['UserName'])) {
        header('location:../../index.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Drumkit</title>
	<link rel="icon" type="image/ico" href="../../logo/logo.png">
	<style type="text/css">
		.drumkit {
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: wrap
		}
		.drum {
			padding: 10px 30px;
			margin: 10px;
			text-align: center;
			border: 1px solid #ccc;
			cursor: pointer;
		}

		@keyframes drum-animation {
			from {
				background: #ffffff;
			}
			to {
				background: #fbf2c0;
			}
		}
	</style>
</head>
<body>
	<div id="drumkit" class="drumkit">
	</div>
	<script type="text/javascript" src="drumkit.js"></script>
</body>
</html>