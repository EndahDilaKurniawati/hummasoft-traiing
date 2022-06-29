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
    // DIDALAM ARRAY ADA ARRAY
    // indeks dimulai dari 0
        $trainer = array (
            array("Rezky","Laravel"),
            array("Abduh","Adonis"),
            array("Iqbal","VueJs"),
        );
        // echo "<pre>"; // untuk merapihkan
        // print_r($trainer);
        // echo "</pre>";

        // menampilkan rezki
        echo $trainer[2][1];
    ?>

    //output
    Array
    (
        [0] => Array
            (
                [0] => Rezky
                [1] => Laravel
            )

        [1] => Array
            (
                [0] => Abduh
                [1] => Adonis
            )

        [2] => Array
            (
                [0] => Iqbal
                [1] => VueJs
            )

    )   
</body>
</html>