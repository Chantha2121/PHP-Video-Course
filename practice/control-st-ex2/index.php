<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  $overtime = 60;
  if ($overtime <= 50) {
    $pay_amt = 1200;
    $medical = 1000;
    echo "Payment Amount is : $pay_amt and Medical Allowance is : $medical";
  } else {
    $pay_amt = 1500;
    $medical = 1200;
    echo "Payment Amount is : $pay_amt and Medical Allowance is : $medical";
  }
  ?>
</body>

</html>