<?php
class Invoker {
    private $commands = [];

    public function addCommand(Command $command) {
        $this->commands[] = $command;
    }

    public function executeCommands() {
        foreach ($this->commands as $command) {
            $command->execute();
        }
        $this->commands = [];
    }
}