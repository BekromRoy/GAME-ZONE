<?php
    session_start();
    if (!isset($_SESSION['UserName'])) {
        header('location:../../index.html');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Piano</title>
  <link rel="icon" type="image/ico" href="../../logo/logo.png">
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <div class="piano">
      <button class="white-key C4-key"></button>
      <button class="black-key Db4-key"></button>
      <button class="white-key D4-key"></button>
      <button class="black-key Eb4-key"></button>
      <button class="white-key E4-key"></button>
      <button class="white-key F4-key"></button>
      <button class="black-key Gb4-key"></button>
      <button class="white-key G4-key"></button>
      <button class="black-key Ab4-key"></button>
      <button class="white-key A4-key"></button>
      <button class="black-key Bb4-key"></button>
      <button class="white-key B4-key"></button>
      <button class="white-key C5-key"></button>
      <button class="black-key Db5-key"></button>
      <button class="white-key D5-key"></button>
      <button class="black-key Eb5-key"></button>
      <button class="white-key E5-key"></button>
    </div>

    <script src="script.js"></script>
  </body>
</html>