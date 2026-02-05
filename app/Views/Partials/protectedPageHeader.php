<?php  
$navLinks = [
  "Dashboard" =>'/financial-monitoring-app/Dashboard', 
  "Income" => "/financial-monitoring-app/Income", 
  "Expenses" => "/financial-monitoring-app/Expenses", 
  "Categories" => "/financial-monitoring-app/Categories"
];

// 'financial-monitoring-app/Dashboard';

  $currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  // strip base path
  $basePath = '/financial-monitoring-app';
  if (strpos($currentUri, $basePath) === 0) {
      $currentUri = substr($currentUri, strlen($basePath));
  }
  if ($currentUri === '') {
      $currentUri = '/';
  }

?>

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
            <?php foreach($navLinks as $label => $url):
            $linkPath = parse_url($url, PHP_URL_PATH);
            $linkPath = str_replace($basePath, '', $linkPath)
            
            ?>
            <li class="nav-item">
                <a class="nav-link <?= $currentUri === $linkPath? 'active':'' ?>" href="<?= htmlspecialchars($url) ?>"><?=  htmlspecialchars($label) ?></a>
            </li>
            <?php endforeach?>
              <li class="nav-item mt-3 px-2">
                    <form action="/financial-monitoring-app/logout" method="POST">
                        <button 
                            type="submit" 
                            class="btn btn-link nav-link text-danger w-100 text-start"
                            style="padding-left: .5rem;"
                        >
                            Logout
                        </button>
                    </form>
                </li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<main class="content">
    <div class="container-fluid p-3">