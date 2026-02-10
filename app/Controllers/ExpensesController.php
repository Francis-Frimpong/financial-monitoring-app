<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Middleware/Auth.php';
require_once __DIR__ . '/../Models/Expenses.php';
use App\Database\Database;
use App\Middleware\Auth;
use App\Models\Expenses;


class ExpensesController
{
    private $expense;

    public function __construct()
    {
        $pdo = Database::getConnection();  
        $this->expense = new Expenses($pdo); 
    }

    public function expensesPage()
    {
        Auth::check();
        $userId = $_SESSION['user_id'] ?? null;

        $pageTitle = 'Expenses';
        $expense = $this->expense->expenseView($userId);
        require __DIR__ . '/../Views/expenses.php';
    }

    public function delete()
    {
        $userId = $_SESSION['user_id'] ?? null;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $expenseId = $_POST['id'];

            $this->expense->deleteExpense($expenseId, $userId);

            header('Location: /financial-monitoring-app/Expenses');
            exit;
        }

    }

}
