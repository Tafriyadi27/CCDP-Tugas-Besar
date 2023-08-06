<?php

require_once('Subject.php');
require_once('Observer.php');
class Customer implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update(Subject $subject) {
        $ticketAvailability = $subject->getTicketAvailability();
        if ($ticketAvailability) {
            echo "Hi {$this->name}, tiket konser telah tersedia!\n <br>";
        } else {
            echo "Hi {$this->name}, maaf tiket konser belum tersedia.\n <br>";
        }
    }
}