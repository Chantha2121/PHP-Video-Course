<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $i = 10;

  if ($i == 10) {
    if ($i < 15)
      echo "i is smaller than 15<br>";

    // nest if statement
    // will only be executed if statement above is true
    if ($i < 12)
      echo "i is smaller than 12 too";
    else
      echo "i is greater than 15";
  }

  ?>
</body>

</html>