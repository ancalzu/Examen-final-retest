<?php

namespace ExpenseReport;

class SmsMessage implements Sender
{
    public function send($date): void
    {
        print("Message to Telegram sent: " . $date . "\n");
    }
}