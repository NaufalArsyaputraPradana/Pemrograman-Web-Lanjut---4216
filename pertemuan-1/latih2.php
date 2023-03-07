<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>

<body>
    <?php
    $ret = print("Hello World");
    print " Nilai return = $ret";
    ?>
    <!-------------------------------->
    <?php
    $txt1 = "Belajar PHP";
    $txt2 = "Fakultas Ilmu Komputer";
    //setelah variabel di inisialisasi, di munculkan menggunakan perintah print
    print "<h2>" . $txt1 . "</h2>";
    print "Belajar Pemrograman Web di " . $txt2 . "<br>";
    ?>
    <!-------------------------------->
    <?php
    $x = 5;
    $y = 4;
    print("<br>");
    print $x + $y;
    ?>
</body>

</html>