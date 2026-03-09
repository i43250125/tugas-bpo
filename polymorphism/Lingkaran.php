<?php
require_once 'BangunDatar.php';

class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return pi() * pow($this->jariJari, 2);
    }
}