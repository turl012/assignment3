<?php
  include 'ParentClass.php';
  
  $buttonFactory = new ParentClass("Joe", "Button Factory", "Dog");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assignment 3</title>

  <link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <?= $buttonFactory; ?>
  
</body>
</html>