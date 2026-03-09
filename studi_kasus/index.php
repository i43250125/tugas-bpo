<?php
// Memanggil semua file yang dibutuhkan
require_once 'Email.php';
require_once 'SMS.php';
require_once 'WhatsApp.php';

// Membuat objek dari masing-masing class
$notifEmail = new Email();
$notifSMS   = new SMS();
$notifWA    = new WhatsApp();

// Memanggil method kirim() sesuai permintaan tugas
$notifEmail->kirim();
$notifSMS->kirim();
$notifWA->kirim();