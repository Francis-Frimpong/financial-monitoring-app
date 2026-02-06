<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Middleware/Auth.php';
require_once __DIR__ . '/../Models/Income.php';


use App\Database\Database;
use App\Middleware\Auth;
use App\Models\Income;



class IncomeController
{

    private $income;
    public function __construct()
    {
        $pdo = Database::getConnection();  
        $this->income = new Income($pdo);

    }

    public function incomePage()
    {
        Auth::check();
        $userId = $_SESSION['user_id'] ?? null;

        $pageTitle = 'Income';
        $this->income->incomeView($userId);
        require __DIR__ . '/../Views/income.php';
    }


    public function addincomePage()
    {
        Auth::check();
        $pageTitle = 'Add Income';
        require __DIR__ . '/../Views/addIncome.php';
    }
}
