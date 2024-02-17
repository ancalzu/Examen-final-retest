<?php

namespace ExpenseReport;

interface MealType
{
    public function isMealOverExpense($expense): bool;    
}

?>  