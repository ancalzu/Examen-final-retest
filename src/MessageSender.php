<?php

namespace ExpenseReport;

class MessageSender
{
    private Sender $sender;
    
    public function __construct(Sender $sender)
    {
        $this->sender = $sender;
    }

    public function setSender(Sender $sender)
    {
        $this->sender = $sender;
    }

    public function send($date)
    {
        $this->sender->send($date);
    }
}