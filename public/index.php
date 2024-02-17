<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ExpenseReport\Expense;
use ExpenseReport\ExpenseType;
use ExpenseReport\ExpenseTypeFactory;
use ExpenseReport\ExpenseReport;
use ExpenseReport\EmailMessage;
use ExpenseReport\SmsMessage;
use ExpenseReport\MessageSender;


$breakfast = Expense::build(ExpenseTypeFactory::getBreakfastType(), 1500);
$dinner = Expense::build(ExpenseTypeFactory::getDinnerType(), 1000);
$carRental = Expense::build(ExpenseTypeFactory::getCarRentalType(), 500);
$expenseReport = ExpenseReport::build(array($breakfast, $dinner, $carRental));


$emailMessage = new EmailMessage();
$smsMessage = new SmsMessage();

$actualDate = new DateTime();


$sender = new MessageSender($emailMessage);
$sender->send($actualDate->format("Y-m-d"));

$sender->setSender($smsMessage);
$sender->send($actualDate->format("Y-m-d"));