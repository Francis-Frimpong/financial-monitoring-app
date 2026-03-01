<?php
namespace App\Models;

USE PDO;

class MonthlySummary
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function monthlyIncome($user_id, $month, $year)
    {
        $sql = "SELECT SUM(amount) AS monthly_income FROM income
        WHERE user_id = ?
        AND MONTH(income_date) = ?
        AND YEAR(income_date) = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user_id,$month,$year]);
        $result = $stmt->fetch();

        return $result['monthly_income'] ?? 0;
    }

    public function monthlyExpenses($user_id, $month, $year)
    {
        $sql = "SELECT SUM(amount) as monthly_expenses FROM expenses
        WHERE user_id = ?
        AND MONTH(expense_date) = ?
        AND YEAR(expense_date) = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user_id, $month, $year]);

        $result = $stmt->fetch();

        return $result['monthly_expenses'] ?? 0;

    }

    
}