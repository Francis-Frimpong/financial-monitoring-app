<?php
namespace App\Models;

use PDO;

class Register
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function registerUser($name, $email, $password)
    {
        // verify if email already exist
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if($stmt->fetch()){
            header("Location:/financial-monitoring-app/register?error=empty");
            exit;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare("INSERT INTO users (name,email,password) VALUE(?,?,?)");
        $stmt->execute([$name, $email, $hashedPassword ]);
        header("Location:/financial-monitoring-app/login?success=registered");
    }
}