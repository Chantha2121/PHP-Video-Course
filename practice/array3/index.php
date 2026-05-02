<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Array merge()</h2>
  <?php
  $arr1 = array('a', 'b', 'c');
  $arr2 = array(1, 2, 3);

  $mergedArr = array_merge($arr1, $arr2);
  foreach ($mergedArr as $value) {
    echo $value . "<br>";
  }
  ?>
</body>

</html>