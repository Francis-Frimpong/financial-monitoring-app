<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/AddIncome.php';
require_once __DIR__ . '/../Middleware/Auth.php';

use App\Database\Database;
use App\Models\AddIncome;
use App\Middleware\Auth;



class AddIncomeController
{
    private $addIncome;

    public function __construct()

    {
        $pdo = Database::getConnection(); 
        $this->addIncome = new AddIncome($pdo);  
    }

    public function addIncomePage()
    {
        Auth::check();
        
        // $this->addIncome();
        $pageTitle = 'Add Income';
        require __DIR__ . '/../Views/addIncome.php';
    }
        
    public function addincome()
    {
         $userId = $_SESSION['user_id'] ?? null;

        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $amount = trim($_POST['amount']);
            $source = trim($_POST['source']);
            $date = trim($_POST['date']);
            $note = trim($_POST['note']);

            if(empty($amount) || empty($source) || empty($date)){
                header('Location: /financial-monitoring-app/Add-Income');
                exit;
            }

            $this->addIncome->addincomeRecord($userId, $amount,$source,$date,$note);

            header('Location:/financial-monitoring-app/Income');



        }
    }
}
