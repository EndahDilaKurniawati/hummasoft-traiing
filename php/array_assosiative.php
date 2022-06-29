<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

            $siswa1 = [ "nama" => "abduh",
                        "kelas" => "laravel",
                        "nilai" => 70
                    ];
                    //$siswa1 untuk menampilkan semua siswa
                    //
            print_r($siswa1 ["nama"]);

            // menambahkan key value baru ke array $siswa1
            $siswa1["nama"] = "abduh";

            print_r($siswa1);
        ?>
</body>
</html>