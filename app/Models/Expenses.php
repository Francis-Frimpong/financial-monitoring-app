<?php
namespace App\Models;

USE PDO;

class Expenses
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function ExpenseView($user_Id)
    {
        $stmt = $this->pdo->prepare('SELECT expense_date, amount FROM expenses WHERE  user_id = ?');
        $stmt->execute([$user_Id]);

        return $stmt;
    }
}