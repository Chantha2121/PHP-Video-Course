<!DOCTYPE html>
<html lang="en">

<sth>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    img {
      width: 300px;
      height: 200px;
      margin: 10px;
      float: left;
    }
  </style>
</sth>



<body>
  <?php
  $images = array('1.jpeg', '2.jpeg', '3.jpeg');

  foreach ($images as $image) {
    echo "<img src='img/" . $image . "' alt='" . $image . "'><br>";
  }
  ?>
</body>

</html>