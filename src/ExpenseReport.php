<?php

namespace ExpenseReport;

/**
 *
 */
class ExpenseReport
{
    /**
     * @var Expense[]
     */
    private $expenses = array();
    private float $mealExpensesTotal = 0;
    private float $total = 0;
    private $MAX_TOTAL_AMMOUNT = 10000;

    private function __construct($expenses) {

        if(empty($expenses)) {
            throw new \InvalidArgumentException("Expenses cannot be empty");
        }

        $this->expenses = $expenses;
        $this->calculateTotals($expenses);
        if($this->total > $this->MAX_TOTAL_AMMOUNT) {
            throw new \AmountLimitExceededException("Total expenses cannot be more than 10000");
        }
        
        print($this->toString());

    }

    public static function build($expenses) {
        return new ExpenseReport($expenses);
    }

    private function calculateTotals($expenses) {
        foreach ($expenses as $expense) {
            
            if ($expense->getType() instanceof MealType) {                
                $this->mealExpensesTotal += $expense->getAmount();
            }
            print($expense->toString());
            $this->total += $expense->getAmount();
        }
    }

    public function getExpenses(): array {
        return $this->expenses;
    }

    public function getTotal(): float {
        return $this->total;
    }

    private function toString(): string {
        return "Meal Expenses: " . $this->mealExpensesTotal . "\n" . "Total Expenses: " . $this->total . "\n";
    }

    public function send() 
    {
        
    }
}