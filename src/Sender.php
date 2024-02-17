<?php

namespace ExpenseReport;

interface Sender
{
    public function send($date);
}