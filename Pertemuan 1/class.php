<?php
    class Motor
    {
        //property
        public $kenalot = 1;
        public $sepion = 2;
        public $velg = 'palang';
        public $ban = 'batlax';

        // method
        public function Jalan()
        {
            echo "motor sudah berjalan yang memiliki kenalpot sebanyak ".$this->kenalpot."<br>";

        }

        public function Mogok()
        {
            echo "motor Mogok Cek bensin <br>";
        }

        public function Rem()
        {
            echo "motor Berhenti nitch <br>";
        }
    }

    // instansiasi => object
    $rxking = new Motor();
    $rxking->Jalan();
    $rxking->Rem();
    $rxking->Mogok();

    $vario = new Mototr();
    $vario->Jalan();