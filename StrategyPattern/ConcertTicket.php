<?php
class ConcertTicket {
    private $paymentStrategy;

    public function __construct(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function sellTicket($amount) {
        // Logika untuk penjualan tiket konser
        // ...

        // Menggunakan strategi pembayaran yang dipilih
        return $this->paymentStrategy->pay($amount);
    }
}

