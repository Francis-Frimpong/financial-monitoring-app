<?php
namespace App\Models;

USE PDO;

class Dashboard{
    private $pdo;
    // public $totalIncome;
    // public $totalExpenses;
    // public $balance;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function totalIncome($user_id)
{
    $stmt = $this->pdo->prepare("
        SELECT SUM(amount) AS total_income
        FROM income
        WHERE user_id = ?
    ");

    $stmt->execute([$user_id]);
    $result = $stmt->fetch();

    return $result['total_income'] ?? 0;
}


    public function totalExpense($user_id)
    {
            $stmt = $this->pdo->prepare("
                SELECT SUM(amount) AS total_expenses
                FROM expenses
                WHERE user_id = ?
            ");

            $stmt->execute([$user_id]);
            $result = $stmt->fetch();

            return $result['total_expenses'] ?? 0;
    }

    public function balance($user_id)
    {
        $totalIncome = $this->totalIncome($user_id);
        $totalExpenses = $this->totalExpense($user_id);

         return $totalIncome - $totalExpenses;
         
    }


}

