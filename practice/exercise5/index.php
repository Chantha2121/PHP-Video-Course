<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $a = 1000;
  $b = 1200;
  $c = 1400;

  echo "<table border='1' cellspacing='0' cellpadding='5'";
  echo "<tr>
      <td colspan='2'><b>Monthly Salary Statement</b></td>
  </tr>";

  echo "<tr>
      <td><font color=blue>Salary of Mr. A is</font></td>
      <td><font color=green>$a</font></td>
  </tr>";

  echo "<tr>
      <td><font color=blue>Salary of Mr. B is</font></td>
      <td><font color=green>$b</font></td>
  </tr>";

  echo "<tr>
      <td><font color=blue>Salary of Mr. C is</font></td>
      <td><font color=green>$c</font></td>
  </tr>";

  ?>
</body>

</html>