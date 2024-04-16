<?php

/* 
  Write you php code here

   */

  $best_sellers = array('Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffee', 'Jelly Beans');


?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers
    <ol>
    <p>
<?php
echo '<li>' . $best_sellers[0]
. '<li>' . $best_sellers[1]
. '<li>' . $best_sellers[2]
  ?>
  </p>

</ol>
  </h2>


</body>

</html>