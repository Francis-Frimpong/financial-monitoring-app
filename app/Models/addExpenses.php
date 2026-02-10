<?php
namespace App\Models;

USE PDO;

class AddExpenses{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addexpenseRecord($user_id, $amount, $category, $date, $note)
    {
        $stmt = $this->pdo->prepare("INSERT INTO expenses(user_id, amount, category, expense_date, note) VALUES (?, ?, ?, ?, ?)");

        $stmt->execute([$user_id, $amount, $category, $date, $note]);

        return $stmt;
    }
}