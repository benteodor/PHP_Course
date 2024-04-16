<?php

/* 
  Write you php code here

   */

   $nutrition = array('fat'=>25, 'sugar'=>40, 'salt'=>20,'fiber'=>5);
   $nutrition  ['fat'] = 30;
   $nutrition  ['fiber'] = 10;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)
  <p>Fat contents: <?php echo $nutrition['fat'];?> 
  <p>Sugar contents: <?php echo $nutrition['sugar'];?> 
  <p>Salt contents: <?php echo $nutrition['salt'];?>
  <p>Fiber contents: <?php echo $nutrition['fiber'];?></p>
  </h2>



</body>

</html>