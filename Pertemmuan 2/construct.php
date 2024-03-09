<?php
class kendaraan{
    public $mesin = 1500;
    public $jml_roda;

    function __construct() {
        echo "ini adalah method konstruktor";
    }

    // method
    public function nyalakanMesin($harga) {
        echo "mesin menyala menggunakan ". $this->mesin;
        echo "<br>dengan harga ". $harga;
    }
}

// object
$mobil = new Kendaraan();

echo "<br>";

$mobil->mesin = "listrik";
$mobil->nyalakanMesin(5000);
// $mobil->harga(5000);
?>