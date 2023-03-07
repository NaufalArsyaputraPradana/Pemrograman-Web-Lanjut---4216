<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var_Dump</title>
</head>

<body>
    <?php
    $nama = "Agus";
    var_dump($nama); //hasil : string(4)"Agus"
    /*------------------------------------------*/

    $siswa = array(
        'nama' => array("Arif", "Beta", "Cici"),
        'jurusan' => "informatika",
        'semester' => 1,
        1 => 'jakarta',
        2 => 'surabaya'
    );

    echo '<pre>';
    var_dump($siswa);
    echo '</pre>';
    ?>
</body>

</html>