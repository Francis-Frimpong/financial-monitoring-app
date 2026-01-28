<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($pageTitle) ? $pageTitle : "Expense Tracker" ?> | Expense Tracker</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

<!-- Top Navbar (Mobile) -->
<nav class="navbar navbar-light bg-white border-bottom d-md-none">
    <div class="container-fluid">
        <button class="btn btn-outline-primary" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            ☰
        </button>
        <span class="navbar-brand fw-bold">Expense Tracker</span>
    </div>
</nav>

<!-- Sidebar -->
<div class="offcanvas offcanvas-start d-md-block" tabindex="-1" id="sidebar">
    <div class="offcanvas-header d-md-none">
        <h5 class="fw-bold">Menu</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-0 d-flex flex-column sidebar">
        <h4 class="text-center py-3 fw-bold border-bottom d-none d-md-block">
            Expense Tracker
        </h4>

        <ul class="nav flex-column px-2">
            <li class="nav-item">
                <a class="nav-link active" href="dashboard.html">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="income.html">Income</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="expenses.html">Expenses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categories.html">Categories</a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link text-danger" href="#">Logout</a>
            </li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<main class="content">
    <div class="container-fluid p-3">