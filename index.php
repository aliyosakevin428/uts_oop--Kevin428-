<?php

class Drum {
    protected $merek;
    protected $jenis;
    
    public function __construct($merek, $jenis) {
        $this->merek = $merek;
        $this->jenis = $jenis;
        echo "Drum {$merek} {$jenis} siap dimainkan\n";
    }
    
    public function mainkan() {
        echo "Memainkan drum {$this->merek}\n";
    }

    public function infoJenis() {
        echo "Drum {$this->merek} berjenis {$this->jenis}\n";
    }
}

class DrumAkustik extends Drum {
    public function bunyi() {
        echo "{$this->merek}: Boom Takh Takh!\n";
    }
    
    public function __construct($merek) {
        parent::__construct($merek, "Akustik");
    }
}

class DrumElektronik extends Drum {
    public function bunyi() {
        echo "{$this->merek}: Beep buup boop!\n";
    }

    public function __construct($merek) {
        parent::__construct($merek, "Elektronik");
    }
}

echo "=== Drum Akustik ===\n";
$yamaha = new DrumAkustik("Yamaha");
$yamaha->mainkan();
$yamaha->bunyi();
$yamaha->infoJenis();

echo "\n=== Drum Elektronik ===\n";
$roland = new DrumElektronik("Roland");
$roland->mainkan();
$roland->bunyi();
$roland->infoJenis();