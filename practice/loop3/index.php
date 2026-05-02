<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $brush_price = 5;

  echo "<table border='1' align='center'>";
  echo "<tr>
  <th>Qty</th>
  <th>Price</th>

  </tr>";

  for ($count = 10; $count <= 100; $count += 10) {
    echo "<tr>
    <td>$count</td>
    <td>" . ($count * $brush_price) . "</td>
    </tr>";
  }
  echo "</table>";
  ?>
</body>

</html>