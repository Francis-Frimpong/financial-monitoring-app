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
        $totalIncome = $this->pdo->query("
            SELECT SUM(amount) AS total_income
            FROM income
            WHERE user_id = $user_id
        ")->fetch();

        return $totalIncome = $totalIncome['total_income'] ?? 0;
    }

    public function totalExpense($user_id)
    {
            $totalExpenses = $this->pdo->query("
                SELECT SUM(amount) AS total_expenses
                FROM expenses
                WHERE user_id = $user_id
            ")->fetch();

            return $totalExpenses = $totalExpenses['total_expenses'] ?? 0;
    }

    public function balanace($user_id)
    {
        $totalIncome = $this->totalIncome($user_id);
        $totalExpenses = $this->totalExpense($user_id);

        return $balance = $totalIncome - $totalExpenses;
    }


}

