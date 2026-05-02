<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $diceNumber = 2;

  if ($diceNumber == 1) {
    echo "This dice number is 1";
  } else if ($diceNumber % 2 == 0) {
    if ($diceNumber == 2) {
      echo "This dice number is 2";
    } else if ($diceNumber == 4) {
      echo "This dice number is 4";
    } else if ($diceNumber == 6) {
      echo "This dice number is 6";
    } else {
      echo "The number has to be between 1 and 6";
    }
  } else if ($diceNumber == 3) {
    echo "This dice number is 3";
  } else if ($diceNumber == 5) {
    echo "This dice number is 5";
  } else {
    echo "The number has to be between 1 and 6";
  }
  ?>
</body>

</html>