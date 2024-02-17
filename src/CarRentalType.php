<?php

namespace ExpenseReport;

class CarRentalType implements ExpenseType
{
    private const NAME = "Car Rental";   

    public function getName(): string
    {
        return self::NAME;
    }
}

?>