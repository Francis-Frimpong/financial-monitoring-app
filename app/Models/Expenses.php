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

    public function ExpenseView($user_Id, $limit, $offset)
    {
        $limit  = (int) $limit;
        $offset = (int) $offset;

        $sql = "SELECT id, expense_date, amount
                FROM expenses
                WHERE user_id = :user_id
                ORDER BY expense_date DESC
                LIMIT $limit OFFSET $offset";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':user_id', (int)$user_Id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
     
    }

    public function countExpenseByUser($user_id)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM income WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchColumn();
    }   


    public function deleteExpense($expense_Id, $user_Id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM expenses WHERE id = ? AND user_id = ?');
        $stmt->execute([$expense_Id, $user_Id]);
         return $stmt->rowCount();
    }
}