<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


  <a href="9.php?source=32332">Click here</a>

    <?php

		/* Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it



		 Step 2 - Set a cookie that expires in one week

		 Step 3 - Start a session and set it to value, any value you want. */

     if(isset($_GET["source"])) {
      echo $_GET["source"];
     }

     $do_remember = isset($_POST['remember']);
     // Use a timespan of 1 week

     $remembering_timespan = time() + 7 * 24 * 60 * 60;
     if ($do_remember)
     {
      setcookie("remember_me", $_POST["username"], $remembering_timespan);
     }

  $_SESSION["favcolor"] = "green";
  $_SESSION["favanimal"] = "cat";

  echo "Session variables are set";

 

 	

		?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>