<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konstanta</title>
</head>

<body>
    <?php
    define("SALAM", "Selamat Pagi");
    define("mobil", [
        "Honda",
        "Daihatsu",
        "Toyota"
    ]);

    function fungsi1()
    {
        echo SALAM;
    }
    fungsi1();
    echo mobil[0];
    ?>

</body>

</html>