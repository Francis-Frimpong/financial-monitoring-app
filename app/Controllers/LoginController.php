<?php
namespace App\Controllers;
require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Register.php';

use App\Database\Database;
use App\Models\Register;

class LoginController
{
    private $login;
    
    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->login= new Register($pdo);

    }

    public function loginPage()
    {
        $pageTitle = 'Login';
        require __DIR__ . '/../Views/auth/login.php';

    }
    public function registerPage()
    {
        $pageTitle = 'Register';
        require __DIR__ . '/../Views/auth/register.php';

    }

    public function registerNewUser()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fullname'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])){
            $name = trim($_POST['fullname']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $confirm_password = trim($_POST['confirm_password']);

            // check if fields are empty
             if(empty($name) || empty($email) || empty($password) || empty($confirm_password)){
                header("Location:/financial-monitoring-app/register?input-error=input");
                exit;
            }

            // confirm if password match
            if ($password !== $confirm_password) {
                header("Location:/financial-monitoring-app/register?password-error=mismatch");
                exit;
            }


            $this->login->registerUser($name,$email,$password);
            header('Location: /financial-monitoring-app/login ');
        }
    }
}