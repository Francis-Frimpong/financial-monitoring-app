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

    public function incomeView($userId, $limit, $offset)
    {
        $limit  = (int) $limit;
        $offset = (int) $offset;

        $sql = "SELECT id, income_date, source, amount
                FROM income
                WHERE user_id = :userId
                ORDER BY income_date DESC
                LIMIT $limit OFFSET $offset";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':userId', (int)$userId, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function countIncomeByUser($user_id)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM income WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchColumn();
    }   


    public function deleteIncome($income_Id, $user_Id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM income WHERE id = ? AND user_id = ?');
        $stmt->execute([$income_Id, $user_Id]);
        return $stmt->rowCount();
    }
}