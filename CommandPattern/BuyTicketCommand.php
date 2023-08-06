<?php
class BuyTicketCommand implements Command {
    private $ticket;

    public function __construct(Ticket $ticket) {
        $this->ticket = $ticket;
    }

    public function execute() {
        $this->ticket->buy();
    }
}