<?php

/* 
  Write you php code here

   */

   $candyName = 'Jelly Bean';
   $candyPrice = 5;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Welcome to <?php echo $candyName; ?></h2>
  <p>The cost of the candy per pack is € <?php echo $candyPrice; ?></p>
</body>

</html>