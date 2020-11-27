<?php

require_once "content.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?= $title ?></title>

  <!-- Bootstrap core CSS -->

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet" />
</head>

<body>



  <!-- nav -->

  <?php
  require_once "pages/nav.php"

  ?>

  <!-- content -->

  <?php
  require_once "pages/container.php"

  ?>

  <!-- footer -->

  <?php
  require_once "pages/footer.php"

  ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>