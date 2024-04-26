<?php

class Persoon {
    public $naam;
    private $leeftijd;
    protected $geslacht;
    public $isStudent;
    public $gemiddeldCijfer;

    public function __construct($naam, $leeftijd, $geslacht, $isStudent, $gemiddeldCijfer) {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->geslacht = $geslacht;
        $this->isStudent = $isStudent;
        $this->gemiddeldCijfer = $gemiddeldCijfer;
    }

    public function getLeeftijd() {
        return $this->leeftijd;
    }

    public function setLeeftijd($leeftijd) {
        $this->leeftijd = $leeftijd;
    }
}
