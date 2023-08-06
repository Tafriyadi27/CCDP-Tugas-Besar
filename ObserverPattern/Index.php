<?php
require_once('Subject.php');
require_once('Customer.php');

// Membuat objek Subject
$konserSubject = new Subject();

// Membuat beberapa pelanggan (observer)
$customer1 = new Customer("John");
$customer2 = new Customer("Alice");


// Pelanggan mendaftar sebagai pengamat pada subjek
$konserSubject->attach($customer1);
$konserSubject->attach($customer2);


// Set status ketersediaan tiket (true atau false)
$konserSubject->setTicketAvailability(true);
$konserSubject->setTicketAvailability(false);