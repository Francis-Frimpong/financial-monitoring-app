<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($pageTitle) ? $pageTitle : "Expense Tracker" ?> | Expense Tracker</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Expense Tracker</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#authNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="authNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/financial-monitoring-app/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/financial-monitoring-app/register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
