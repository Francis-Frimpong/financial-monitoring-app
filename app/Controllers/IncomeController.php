<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
use App\Database\Database;


class IncomeController
{

    public function __construct()
    {
        $pdo = Database::getConnection();   
    }

    public function incomePage()
    {
         $pageTitle = 'Income';
        require __DIR__ . '/../Views/income.php';
    }
}
