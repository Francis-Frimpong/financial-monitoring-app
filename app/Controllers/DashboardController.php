<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Middleware/Auth.php';
require_once __DIR__ . '/../Models/Dashboard.php';
require_once __DIR__ . '/../Models/MonthlySummary.php';

use App\Database\Database;
use App\Middleware\Auth;
use App\Models\Dashboard;
use App\Models\MonthlySummary;



class DashboardController
{

    private $dashboard;
    private $summary;

    public function __construct()
    {
        $pdo = Database::getConnection();  
        $this->dashboard  = new Dashboard($pdo);
        $this->summary = new MonthlySummary($pdo);


    }
        
    public function dashboardPage()
    {

        Auth::check();
        $userId = $_SESSION['user_id'] ?? null;

         if(!$userId){
            header('Location:/financial-monitoring-app/dashboard');
        }
        
        // overall total
        $totalIncome = $this->dashboard->totalIncome($userId);
        $totalExpenses =$this->dashboard->totalExpense($userId);
        $balance = $this->dashboard->balance($userId);

        // monthly summary
        $currentMonth = $_GET['month'] ?? date('m');
        $currentYear  = $_GET['year'] ?? date('Y');


        $monthlyIncome = $this->summary->monthlyIncome($userId, $currentMonth,$currentYear);

        $monthlyExpenses = $this->summary->monthlyExpenses($userId, $currentMonth,$currentYear);

        $monthlyBalance = $monthlyIncome - $monthlyExpenses;

        $pageTitle = 'Dashboard';
        require __DIR__ . '/../Views/dashboard.php';
    }


}
