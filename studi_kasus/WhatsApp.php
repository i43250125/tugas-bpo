<?php
require_once 'Notifikasi.php';

class WhatsApp extends Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp <br>";
    }
}