<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
use App\Database\Database;


class AddIncomeController
{

    public function __construct()
    {
        $pdo = Database::getConnection();   
    }

    public function addIncomePage()
    {
         $pageTitle = 'Add Income';
        require __DIR__ . '/../Views/addIncome.php';
    }
}
