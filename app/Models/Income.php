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
        $stmt = $this->pdo->prepare('SELECT income_date, source, amount FROM income WHERE  user_id = ?');
        $stmt->execute([$user_Id]);

        return $stmt;
    }
}