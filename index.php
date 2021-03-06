<?php
include_once 'app/php/array.php';
include_once 'app/php/function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="sticky-top">
    <?php menu($masyvas['menu']); ?>
</header>
<main>
  
<section id="gallery">
        <?php galerija($masyvas['images']) ?>
</section>
<section id="about">
    <?php display_text($masyvas['text_columns']); ?>
</section>

<section  class= "mt-5" id="contact">
    <?php get_form($masyvas, 'user_name', 'user_email','textarea'); ?>
</section>
</main>
<script src="assets/js/jQuery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>

