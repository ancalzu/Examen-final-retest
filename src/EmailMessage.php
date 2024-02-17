<?php

namespace ExpenseReport;

class EmailMessage implements Sender
{
    public function send($date): void
    {
        print("Email sent: " . $date . "\n");
    }
}