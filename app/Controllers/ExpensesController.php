<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
use App\Database\Database;


class ExpensesController
{

    public function __construct()
    {
        $pdo = Database::getConnection();   
    }

    public function expensesPage()
    {
         $pageTitle = 'Expenses';
        require __DIR__ . '/../Views/expenses.php';
    }
}
