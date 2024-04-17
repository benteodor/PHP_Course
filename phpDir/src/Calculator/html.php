<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simple Calculator</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <div class="Calculator">
    <h2>Simple Calculator</h2>
    <form action="" method="post">
      <input
        type="number"
        name="num1"
        placeholder="Enter first number"
        required />
      <input
        type="number"
        name="num2"
        placeholder="Enter second number"
        required />
      <button type="submit" name="add">Add</button>
      <button type="submit" name="subtract">Subtract</button>
      <button type="submit" name="multiply">Multiply</button>
      <button type="submit" name="divide">Divide</button>
    </form>
    <?php

    class Calculator {
        public function add($num1, $num2) {
            return $num1 + $num2;
        }

        public function subtract($num1, $num2) {
            return $num1 - $num2;
        }

        public function multiply($num1, $num2) {
            return $num1 * $num2;
        }

        public function divide($num1, $num2) {
            if ($num2 == 0) {
                return "Error: Division by zero";
            }
            return $num1 / $num2;
        }
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Create an instance of the Calculator class
        $calculator = new Calculator();

        // Get the values from the form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Check which button was clicked and perform the corresponding operation
        if (isset($_POST["add"])) {
            $result = $calculator->add($num1, $num2);
        } elseif (isset($_POST["subtract"])) {
            $result = $calculator->subtract($num1, $num2);
        } elseif (isset($_POST["multiply"])) {
            $result = $calculator->multiply($num1, $num2);
        } elseif (isset($_POST["divide"])) {
            $result = $calculator->divide($num1, $num2);
        }
        
        // Display the result
        echo "<p>Result: $result</p>";
    }
    ?>
  </div>
</body>
</html>
