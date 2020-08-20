<?php

namespace PlayPatterns\Behavioral\Command;

class CommandSend implements Command
{

    private Sender $sender;
    private string $from;
    private string $to;
    private string $text;

    public function __construct(Sender $sender, $from, $to, $text)
    {
        $this->sender = $sender;
        $this->from = $from;
        $this->to = $to;
        $this->text = $text;
    }

    public function execute()
    {
        return $this->sender->send($this->from, $this->to, $this->text);
    }

}
