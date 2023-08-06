<?php

require_once('PaymentContext.php');
require_once('CreditCardPayment.php');
require_once('BankTransferPayment.php');
require_once('EWalletPayment.php');

$amount = 100; 

// Pilih metode pembayaran
$creditcard = new CreditCardPayment();
$banktransfer = new BankTransferPayment();
$ewallet = new EWalletPayment();


// Pembayaran lewat credit card
$paymentContextCreditCard = new PaymentContext();
$paymentContextCreditCard->setPaymentStrategy($creditcard);
$paymentContextCreditCard->executePayment($amount);

// Pembayaran lewat bank transfer
$paymentContextBankTransfer = new PaymentContext();
$paymentContextBankTransfer->setPaymentStrategy($banktransfer);
$paymentContextBankTransfer->executePayment($amount);

// Pembayaran lewat e-wallet
$paymentContextEWallet = new PaymentContext();
$paymentContextEWallet->setPaymentStrategy($ewallet);
$paymentContextEWallet->executePayment($amount);


