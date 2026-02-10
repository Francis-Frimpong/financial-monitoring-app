<?php
namespace App\Controllers;


require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/AddExpenses.php';
use App\Database\Database;
use App\Models\AddExpenses;


class AddExpensesController
{
    private $addExpenses;

    public function __construct()
    {
        $pdo = Database::getConnection();   
        $this->addExpenses =  new AddExpenses($pdo);
    }

    public function addexpensesPage()
    {
         $pageTitle = 'Add Expenses';
        require __DIR__ . '/../Views/addExpenses.php';
    }

    public function addExpenses()
    {
        $userId = $_SESSION['user_id'] ?? null;

        if(!$userId){
              header('Location:/financial-monitoring-app/login');
        }

        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $amount = trim($_POST['amount']);
            $category = trim($_POST['category']);
            $date = trim($_POST['date']);
            $note = trim($_POST['note']);

            if(empty($amount) || empty($category) || empty($date)){
                header('Location: /financial-monitoring-app/Add-Expenses');
                exit;
            }

            $this->addExpenses->addexpenseRecord($userId, $amount, $category, $date, $note);

            header('Location:/financial-monitoring-app/Expenses');
            exit;
        }
    }
}