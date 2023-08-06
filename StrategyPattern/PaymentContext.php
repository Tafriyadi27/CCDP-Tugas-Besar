<?php
class PaymentContext {
    private $paymentStrategy;

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function executePayment($amount) {
        $this->paymentStrategy->pay($amount);
    }
}