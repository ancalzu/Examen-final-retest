<?php

namespace ExpenseReport;

class Expense {
    private ExpenseType $type;
    private float $amount;
    
    private function __construct(ExpenseType $type, float $amount) {
        
        if($amount < 0) {
            throw new \InvalidArgumentException("Amount cannot be negative");
        }

        $this->type = $type;
        $this->amount = $amount;
    }

    public static function build(ExpenseType $type, float $amount) {
        return new Expense($type, $amount);
    }

    public function getTypeName(): string {
        return $this->type->getName();
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function toString(): string {
        return "Type: " . $this->getTypeName() . " Amount: " . $this->amount ." \n";
    }

    public function getType(): ExpenseType {
        return $this->type;
    }

}