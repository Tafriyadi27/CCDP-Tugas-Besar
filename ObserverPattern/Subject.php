<?php
class Subject {
    private $observers = array();
    private $ticketAvailability = false;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            array_splice($this->observers, $index, 1);
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setTicketAvailability($available) {
        $this->ticketAvailability = $available;
        $this->notify();
    }

    public function getTicketAvailability() {
        return $this->ticketAvailability;
    }
}
