<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<?php
// 1,2,3 ...20
for ($x = 1; $x <= 20; $x++) {
  echo "The number is: $x <br>";
}

?>
<br>

<?php
// 2, 4, 6 ...20
for ($x = 2; $x <= 20; $x = $x + 2) {
  echo "The number is: $x <br>";
}

?>

<br>

<?php
// 2, 5, 7, 10, 12, 15, 17, 20
for ($x = 2; $x <= 20; $x = $x + 3) {
  echo "The number is: $x <br>";
}
?>

</html>