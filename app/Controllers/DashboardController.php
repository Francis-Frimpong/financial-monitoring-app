<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Middleware/Auth.php';
require_once __DIR__ . '/../Models/Dashboard.php';
use App\Database\Database;
use App\Middleware\Auth;
use App\Models\Dashboard;


class DashboardController
{

    private $dashboard;
    public function __construct()
    {
        $pdo = Database::getConnection();  
        $this->dashboard  = new Dashboard($pdo);

    }
        
    public function dashboardPage()
    {

        Auth::check();
        $userId = $_SESSION['user_id'] ?? null;
        
        $totalIncome = $this->dashboard->totalIncome($userId);
        $totalExpenses =$this->dashboard->totalExpense($userId);
        $balance = $this->dashboard->balanace($userId);

        $pageTitle = 'Dashboard';
        require __DIR__ . '/../Views/dashboard.php';
    }
}
