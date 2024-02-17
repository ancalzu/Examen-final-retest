<?php

namespace ExpenseReport;

class SmsMessage implements Sender
{
    public function send($date): void
    {
        print("SMS sent: " . $date . "\n");
    }
}