<?php

namespace ExpenseReport;

class AmountLimitExceededException extends Exception {
    public function __construct($message = "Amount limit exceeded", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

?>