<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="calculator">
      <h2>Simple Calculator</h2>
      <form action="calculator.php" method="post">
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
    </div>
  </body>
</html>
