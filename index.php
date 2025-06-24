<?php

class Kendaraan {
    protected $merek;
    public $warna;
    
    public function __construct($merek, $warna) {
        $this->merek = $merek;
        $this->warna = $warna;
        echo "Kendaraan {$merek} siap digunakan\n";
    }
    
    public function jalan() {
        echo "{$this->merek} sedang berjalan\n";
    }

    public function warna() {
        echo "{$this->merek} berwarna {$this->warna}\n";
    }
}

class Mobil extends Kendaraan {
    public function klakson() {
        echo "{$this->merek}: Beep Beep!\n";
    }
    
    public function __construct($merek) {
        parent::__construct($merek, "Merah");
    }
}

class Motor extends Kendaraan {
    public function klakson() {
        echo "{$this->merek}: Tiiin!\n";
    }

    public function __construct($merek) {
        parent::__construct($merek, "Hitam Legam");
    }
}

echo "=== Mobil ===\n";
$avanza = new Mobil("Avanza");
$avanza->jalan();
$avanza->klakson();
$avanza->warna();

echo "\n=== Motor ===\n";
$beat = new Motor("Beat");
$beat->jalan();
$beat->klakson();
$beat->warna();