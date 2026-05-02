<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // 20, 19, 18,... 1
  for ($x = 20; $x >= 1; $x--) {
    echo "The number is: " . $x . "<br>";
  }

  ?>
  <br>

  <?php
  // 20, 18, 16,... 2
  for ($x = 20; $x >= 2; $x = $x - 2) {
    echo "The number is: " . $x . "<br>";
  }
  ?>

  <br>

  <?php
  // 20, 17,14,...3
  for ($x = 20; $x >= 3; $x = $x - 3) {
    echo "The number is: " . $x . "<br>";
  }
  ?>

</body>

</html>