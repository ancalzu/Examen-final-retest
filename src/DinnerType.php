<?php

namespace ExpenseReport;

class DinnerType implements ExpenseType,  MealType
{
    private const NAME = "Dinner";
    private const AMOUNT_LIMIT = 5000;

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