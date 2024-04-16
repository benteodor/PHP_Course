<?php
// Write PHP code here
// Create an array of greetings then get random values
$greetings = ['Hi', 'Howdy'];
$greetings_key = array_rand($greetings);
$greetings = $greetings[$greetings_key];

// Array of best sellers, count items, list top items
$bestsellers = ['notebook', 'pencil', 'ink'];
$bestsellers_count = count($bestsellers);
$bestsellers_text = implode(',', $bestsellers);

//Array holding customer details
$customer = ['forename' => 'James',
'surname'=> 'Bond', 'email' => 'jamesbond@gmail.com'];

// If you have a customer firstname add it to greent
if(array_key_exists('forename', $customer)) {
  $greetings .= $customer['forename'];
}



?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<p><?= $greetings ?></p>
<p>Our top <?= $bestsellers_count ?> items today are:
  <b><?= $bestsellers_text ?> </b>
</p>

<?php include 'includes/footer.php'; ?>
