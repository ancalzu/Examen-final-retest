<?php

namespace ExpenseReport;

class LunchType implements ExpenseType,  MealType
{
    private const NAME = "Lunch";
    private const AMOUNT_LIMIT = 2000;

    public function isMealOverExpense($amount): bool
    {
        return $amount > self::AMOUNT_LIMIT;
    }

    public function getName(): string
    {
        return self::NAME;
    }
}

?>