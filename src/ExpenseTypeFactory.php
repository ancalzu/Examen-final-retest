<?php

namespace ExpenseReport;

class ExpenseTypeFactory
{
    public static function getBreakfastType()
    {
        return new BreakfastType();
    }

    public static function getDinnerType()
    {
        return new DinnerType();
    }    

    public static function getLunchType()
    {
        return new LunchType();
    }

    public static function getCarRentalType()
    {
        return new CarRentalType();
    }
}