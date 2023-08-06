<?php
class Ticket {
    private $concert;
    private $customer;

    public function __construct($concert, $customer) {
        $this->concert = $concert;
        $this->customer = $customer;
    }

    public function buy() {
        // Logika untuk membeli tiket
        echo "{$this->customer} membeli tiket untuk konser {$this->concert}\n <br>";
    }

    public function refund() {
        // Logika untuk melakukan refund tiket
        echo "{$this->customer} melakukan refund tiket untuk konser {$this->concert}\n <br>";
    }
}
