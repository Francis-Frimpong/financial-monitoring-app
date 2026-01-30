<?php
namespace APP\Controllers;


require_once __DIR__ . '/../Database/Database.php';
use App\Database\Database;


class CategoriesController
{

    public function __construct()
    {
        $pdo = Database::getConnection();   
    }

    public function categoriesPage()
    {
         $pageTitle = 'Categories';
        require __DIR__ . '/../Views/categories.php';
    }
}
