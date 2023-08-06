<?php

require_once('PaymentStrategy.php');

class CreditCardPayment implements PaymentStrategy {
    public function pay($amount) {
        // Implementasi logika pembayaran menggunakan kartu kredit
        echo "Pembayaran sebesar $" . $amount . " menggunakan kartu kredit berhasil. <br>";
    }
}


