<?php
require_once 'Command.php';
require_once 'Ticket.php';
require_once 'BuyTicketCommand.php';
require_once 'RefundTicketCommand.php';
require_once 'Invoker.php';

// Membuat objek tiket
$ticket = new Ticket("Konser A", "John");

// Membuat objek perintah
$buyTicketCommand = new BuyTicketCommand($ticket);
$refundTicketCommand = new RefundTicketCommand($ticket);

// Membuat objek invoker
$invoker = new Invoker();

// Menambahkan perintah-perintah ke dalam invoker
$invoker->addCommand($buyTicketCommand);
$invoker->addCommand($refundTicketCommand);

// Menjalankan perintah-perintah yang ada di dalam invoker
$invoker->executeCommands();