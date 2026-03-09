<?php
require_once 'Notifikasi.php';

class Email extends Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui Email <br>";
    }
}