<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
String to lowercase = <?= strtolower($text) ?> <br>
String to uppercase = <?= strtoupper($text) ?> <br>
Length of the string = <?= strlen($text) ?> <br>
Number of words  in string = <?= str_word_count($text) ?> <br>
</p>

<?php include 'includes/footer.php'; ?>