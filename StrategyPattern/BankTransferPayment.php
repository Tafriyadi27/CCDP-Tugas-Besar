<?php

require_once('PaymentStrategy.php');

class BankTransferPayment implements PaymentStrategy {
    public function pay($amount) {
        // Implementasi logika pembayaran menggunakan transfer bank
        echo "Pembayaran sebesar $" . $amount . " menggunakan transfer bank berhasil. <br>";
    }
}

