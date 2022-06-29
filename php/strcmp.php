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
        $passwordasli = "belajarPHP";
        $passwordinput = "belajarPHP";
        $output = strcmp($passwordasli, $passwordinput);
        if ($output !== 0)  {
            echo "Password anda salah!";
        }else  {
            echo "Password anda benar.";
        }
    ?>
</body>
</html>