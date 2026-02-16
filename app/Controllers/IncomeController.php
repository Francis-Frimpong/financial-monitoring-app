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
        $totalRecords = $this->income->countIncomeByUser($userId);

        // Calculate total pages
        $totalPages = ceil($totalRecords / $limit);

        if ($page > $totalPages && $totalPages > 0) {
            $page = $totalPages;
            $offset = ($page - 1) * $limit;
        }

        // Get paginated results

        $row = $this->income->incomeView($userId, $limit, $offset);
        require __DIR__ . '/../Views/income.php';
    }

    public function delete()
    {
        $userId = $_SESSION['user_id'];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $income_Id = $_POST['id'];

            $this->income->deleteIncome($income_Id, $userId);

            header('Location: /financial-monitoring-app/Income');
            exit;
        }
    }


}
