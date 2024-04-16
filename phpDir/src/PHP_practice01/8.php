<!DOCTYPE html>
<html lang="en">

<?php
include "functions.php";
include "includes/header.php";
?>

<section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

    <?php
    // Step 1: Make a variable with some text as a value
    $text = "This is some text.";

    // Step 2: Use crypt() function to encrypt it with a salt
    // Generate a salt (you can use any method to generate a salt, here I'm using crypt)
    $salt = '$2a$07$usesomadasdsadsadsadasdasdsaehtoa';
    $encrypted_text = crypt($text, $salt);

    // Step 3: Assign the crypt result to a variable
    /*There's no need for an additional step to assign the result of crypt() to a variable because I already doing that in Step 2. */

    // Step 4: Output the variable
    echo "Original text: " . $text . "<br>";
    echo "Encrypted text: " . $encrypted_text;
    ?>


    </article>
    <!--MAIN CONTENT-->

</section>

<?php
include "includes/footer.php";
?>

</body>
</html>