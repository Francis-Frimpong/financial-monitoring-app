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

          // Number of records per page
        $limit = 5;

        // Get current page from URL (?page=2)
        $page = isset($_GET['page']) && is_numeric($_GET['page']) 
            ? (int) $_GET['page'] 
            : 1;

        // Prevent negative pages
        $page = max($page, 1);

        // Calculate offset
        $offset = ($page - 1) * $limit;

        // Get total records count
        $totalRecords = $this->expense->countExpenseByUser($userId);

        // Calculate total pages
        $totalPages = ceil($totalRecords / $limit);

        if ($page > $totalPages && $totalPages > 0) {
            $page = $totalPages;
            $offset = ($page - 1) * $limit;
        }

        // Get paginated results

    
        $expense = $this->expense->expenseView($userId,$limit,$offset);
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
