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
        class leptop
        {    
        public $sayap = true;
        public $terbang = true;
        public $posisi = 0;

        public function setBerjalan($val)
        {
            return $this->posisi = $val;
        }

        public function setTerbang($val)
        {
            return $this->Terbang = $val;
        }
    }
     

    ?>

    <?php
        $mini = new Mobil();
        $mini->jalan(); // menampilkan echo 'Mobil berjalan'
        echo $mini->roda; // 4

    ?>
</body>
</html>