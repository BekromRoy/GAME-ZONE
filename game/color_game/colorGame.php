<?php
    session_start();
    if (!isset($_SESSION['UserName'])) {
        header('location:../../index.html');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Color Game</title>
	<link rel="icon" type="image/ico" href="../../logo/logo.png">
	<link rel="stylesheet" type="text/css" href="colorGame.css">
</head>
<body>
<h1>
	The Great 
	<br>
	<span id="colorDisplay">RGB</span> 
	<br>
	Color Game
</h1>

<div id="stripe">
	<button id="reset">New Colors</button>
	<span id="message"></span>
	<button class="mode">Easy</button>
	<button class="mode selected">Hard</button>
</div>

	<div id="container">
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
	</div>

<script type="text/javascript" src="colorGame.js"></script>
</body>
</html>