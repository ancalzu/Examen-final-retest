<?php

namespace ExpenseReport;

class BreakfastType implements ExpenseType,  MealType
{
    private const NAME = "Breakfast";
    private const AMOUNT_LIMIT = 1000;

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