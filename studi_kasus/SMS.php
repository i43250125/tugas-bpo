<?php
require_once 'Notifikasi.php';

class SMS extends Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS <br>";
    }
}