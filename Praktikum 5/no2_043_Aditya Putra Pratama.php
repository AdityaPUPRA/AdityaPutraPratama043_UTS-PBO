<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body>
    <div class="container">
        <h2>Nomor 2</h2>

        <?php
        class Pegawai
        {
            public $nama;
            public $gaji;
            public function __construct($nama, $gaji)
            {
                $this->nama = $nama;
                $this->gaji = $gaji;
            }
            public function infoGaji()
            {
                return $this->gaji;
            }
        }
        class Manajer extends Pegawai
        {
            private $tunjangan;
            public function __construct($nama, $gaji, $tunjangan)
            {
                parent::__construct($nama, $gaji);
                $this->tunjangan = $tunjangan;
            }
            public function infoGaji()
            {
                return $this->gaji;
            }
            public function infoTunjangan()
            {
                return $this->tunjangan;
            }
        }
        class Programmer extends Pegawai
        {
            private $bonus;
            public function __construct($nama, $gaji, $bonus)
            {
                parent::__construct($nama, $gaji);
                $this->bonus = $bonus;
            }
            public function infoGaji()
            {
                return $this->gaji;
            }
            public function infoBonus()
            {
                return $this->bonus;
            }
        }
        class Bayaran
        {
            public function hitungBayaran($peg)
            {
                $uang = $peg->infoGaji();

                return $uang;
            }
            public static function main($args)
            {
                echo "Aditya Putra Pratama - 21091397043";
                echo "<br>";
                $man = new Manajer("Anri", 7000000, 500000);
                echo "<br>", "<br>";
                $prog = new Programmer("Mané", 5500000, 400000);
                echo "<br>", "<br>";
                $hr = new Bayaran();
                echo "<br> Gaji untuk manajer bernama " .
                $man->nama .
                " adalah: Rp. " .
                strval($hr->hitungBayaran($man)),
                    "\n";
                echo "<br>", "<br>";
                echo "<br>Gaji untuk programmer bernama " .
                $prog->nama .
                " adalah: Rp. " .
                strval($hr->hitungBayaran($prog)),
                    "\n";
            }
        }
        Bayaran::main([]);
        ?>
    </div>
</body>
</html>
