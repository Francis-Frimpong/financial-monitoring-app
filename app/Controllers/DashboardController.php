<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
use App\Database\Database;


class DashboardController
{

    public function __construct()
    {
        $pdo = Database::getConnection();   
    }

    public function dashboardPage()
    {
         $pageTitle = 'Dashboard';
        require __DIR__ . '/../Views/dashboard.php';
    }
}
