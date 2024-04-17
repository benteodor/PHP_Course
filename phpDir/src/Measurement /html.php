<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Measurement conversion</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="div1">
  <p>Measurement conversion</p>
  <form class="" action="html.php" method="post">
    <label for="distance">Select a Conversion Option</label><br>
    <select id="distance" name="distance" required>
      <option selected disabled>Choose an Option</option>
      <option value="Meter to Centimeter">Meter to Centimeter</option>
      <option value="Centimeter to Meter">Centimeter to Meter</option>
      <option value="Kilometre to Meter">Kilometre to Meter</option>
      <option value="Meter to Kilometre">Meter to Kilometre</option>
      <option value="Centimeter to Milimetre">Centimeter to Milimetre</option>
      <option value="Milimetre to Centimeter">Milimetre to Centimeter</option>
    </select>
    <h3>
      <?php
      if (isset($_POST['convert'])) {
        $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
        $option = isset($_POST['distance']) ? $_POST['distance'] : '';

        if ($option == 'Meter to Centimeter') {
          $result = $amount * 100;
          echo $amount . " Meter = " . $result . " Centimeter";
        } elseif ($option == 'Centimeter to Meter') {
          $result = $amount / 100;
          echo $amount . " Centimeter = " . $result . " Meter";
        } elseif ($option == 'Kilometre to Meter') {
          $result = $amount * 1000;
          echo $amount . " Kilometre = " . $result . " Meter";
        } elseif ($option == 'Meter to Kilometre') {
          $result = $amount / 1000;
          echo $amount . " Meter = " . $result . " Kilometre";
        } elseif ($option == 'Centimeter to Milimetre') {
          $result = $amount * 10;
          echo $amount . " Centimeter = " . $result . " Milimetre";
        } elseif ($option == 'Milimetre to Centimeter') {
          $result = $amount / 10;
          echo $amount . " Milimetre = " . $result . " Centimeter";
        } else {
          echo "Choose a Conversion Option";
        }
      }
      ?>
    </h3>
    <input id="amount" type="text" name="amount" value="" placeholder="Enter a Value" required><br>
    <input id="convert" type="submit" name="convert" value="Convert">
  </form>
</div>
</body>
</html>

