<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variable Lokal</title>
</head>

<body>
  <?php
  function fungsi1()
  {
    $x = 5; // local scope
    echo "<p>Variable x  di dlm fungsi: $x</p>";
  }
  fungsi1();
  // menggunakan  variabel x di luar fungsi  akan mengakibatkan error
  echo "<p>Variable x di luar fungsi : $x</p>";
  ?>


</body>

</html>