<?php

require_once('PaymentStrategy.php');

class EWalletPayment implements PaymentStrategy {
    public function pay($amount) {
        // Implementasi logika pembayaran menggunakan dompet digital
        echo "Pembayaran sebesar $" . $amount . " menggunakan dompet digital berhasil. <br>";
    }
}