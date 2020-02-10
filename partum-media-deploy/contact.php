<?php
session_start();
$word = $_SESSION['error'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon.ico">

  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" />
  <title>Partum Media</title>
</head>

<body>
  <!-- Mobile HTML -->
  <div class="mobile-top-clouds">
    <img src="./assets/partum-media-top-clouds.png" alt="" />
  </div>
  <div class="mobile-background">
    <div class="submitted">
      <p>Your E-mail has been sent!</p>
      <a href="index.php">
        <p class="back"> Go Back?</p>

      </a>
    </div>
  </div>

  <!-- Desktop HTML -->
  <div class="body-image">
    <div class="body-image-overlay"></div>
    <div class="logo">
      <img src="./assets/partum-media-logo-minimal.png" alt="">
    </div>
    <div class="submitted">
      <p>Your E-mail has been sent!</p>
      <a href="index.php">
        <p class="back"> Go Back?</p>
      </a>
    </div>
</body>

</html>