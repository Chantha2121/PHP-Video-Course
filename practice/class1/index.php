<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  class Test
  {
    function first()
    {
      echo "Hello Main Class<br>";
    }
  }

  class Sample extends Test
  {
    public function second()
    {
      echo "Hello Sub Class";
    }
  }

  $obj = new Sample();
  $obj->first();
  $obj->second();

  ?>
</body>

</html>