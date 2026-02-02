<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
use App\Database\Database;


class AddExpensesController
{

    public function __construct()
    {
        $pdo = Database::getConnection();   
    }

    public function addexpensesPage()
    {
         $pageTitle = 'Add Expenses';
        require __DIR__ . '/../Views/addExpenses.php';
    }
}