<?php
namespace App\Models;

USE PDO;

class AddIncome{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addincomeRecord($user_id, $amount, $source,$date,$note)
    {
        $stmt = $this->pdo->prepare("INSERT INTO income (user_id, amount, source, income_date, note ) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $amount, $source, $date, $note]);

        return $stmt;
    }
}