<?php
namespace App\Models;

USE PDO;

class Income
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function incomeView($user_Id)
    {
        $stmt = $this->pdo->prepare('SELECT id, income_date, source, amount FROM income WHERE  user_id = ?');
        $stmt->execute([$user_Id]);

        return $stmt;
    }

    public function deleteIncome($income_Id, $user_Id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM income WHERE id = ? AND user_id = ?');
        $stmt->execute([$income_Id, $user_Id]);
        return $stmt->rowCount();
    }
}