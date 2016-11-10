<?php
  include 'ParentClass.php';
  include 'ChildClass.php';

  $buttonFactory = new ChildClass("Joe", "Button Factory", "Dog", "No");
  
  # This is a comment
  
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assignment 3</title>

  <link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <h1>My Favourite Camp Song!</h1>
  <p>
    <?= $buttonFactory; ?>
  </p>

  <p>He said "Push the button with your right hand"</p>

  <p>
    <?= $buttonFactory; ?>
  </p>

  <p>He said "Push the button with your left hand"</p>

  <p>
    <?= $buttonFactory; ?>
  </p>

  <p>He said "Push the button with your right foot"</p>

  <p>
    <?= $buttonFactory; ?>
  </p>

  <p>He said "Push the button with your left foot"</p>

  <p>
    <?= $buttonFactory; ?>
  </p>

  <p>He said "Push the button with your tounge"</p>

  <?= $buttonFactory->setStatus("YES!"); ?>

  <p>
    <?= $buttonFactory; ?>
  </p>

</body>
</html>
