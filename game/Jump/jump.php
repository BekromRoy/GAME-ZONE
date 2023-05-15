<?php
    session_start();
    if (!isset($_SESSION['UserName'])) {
        header('location:../../index.html');
    }
?>
<!DOCTYPE html>
<html lang="en" onclick="jump()">
<head>
    <meta charset="UTF-8">
    <title>Jump Game</title>
	<link rel="icon" type="image/ico" href="../../logo/logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<p>Score: <span id="scoreSpan"></span></p>
	<div class="border"></div>
    <div class="game">
        <div id="character"></div>
        <div id="block"></div>
    </div>
</body>
<script src="script.js"></script>
</html>