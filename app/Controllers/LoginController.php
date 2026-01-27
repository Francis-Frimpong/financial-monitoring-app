<?php
namespace App\Controllers;
require_once __DIR__ . '/../Database/Database.php';

use App\Database\Database;

class LoginController
{
    private $login;

    public function __construct()
    {
        $pdo = Database::getConnection();

    }

    public function loginPage()
    {
        $pageTitle = 'Login';
        require __DIR__ . '/../Views/auth/login.php';

    }
    public function RegisterPage()
    {
        $pageTitle = 'Register';
        require __DIR__ . '/../Views/auth/register.php';

    }
}