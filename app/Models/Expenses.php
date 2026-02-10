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
        $stmt = $this->pdo->prepare('SELECT id,expense_date, amount FROM expenses WHERE  user_id = ?');
        $stmt->execute([$user_Id]);

        return $stmt;
    }

    public function deleteExpense($expense_Id, $user_Id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM expenses WHERE id = ? AND user_id = ?');
        $stmt->execute([$expense_Id, $user_Id]);
         return $stmt->rowCount();
    }
}