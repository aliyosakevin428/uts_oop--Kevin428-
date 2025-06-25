<?php

class Drum {
    protected $merek;
    protected $jenis;
    
    public function __construct($merek, $jenis) {
        $this->merek = $merek;
        $this->jenis = $jenis;
    }
    
    public function getInfo() {
        return "Drum {$this->merek} {$this->jenis}";
    }

    public function mainkan() {
        return "Memainkan " . $this->getInfo();
    }

    public function getBunyi() {
        return "Bunyi standar drum";
    }
} 

class DrumAkustik extends Drum {
    public function getBunyi() {
        return "{$this->merek}: Boom Tak! Tak! Boom Tak!";
    }
    
    public function __construct($merek) { 
        parent::__construct($merek, "Akustik");
    }
}

class DrumElektronik extends Drum {
    public function getBunyi() {
        return "{$this->merek}: Beep buup boop!";
    }

    public function __construct($merek) {
        parent::__construct($merek, "Elektronik");
    }
}

$yamaha = new DrumAkustik("Yamaha");
$roland = new DrumElektronik("Roland");

echo "\n=== Drum Akustik ===\n";
echo $yamaha->getInfo() . "\n";
echo $yamaha->mainkan() . "\n";
echo $yamaha->getBunyi() . "\n";

echo "\n=== Drum Elektronik ===\n";
echo $roland->getInfo() . "\n";
echo $roland->mainkan() . "\n";
echo $roland->getBunyi() . "\n";