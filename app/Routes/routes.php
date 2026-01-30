<?php
return array_merge(
    require __DIR__ .'/loginRoutes.php',
    require __DIR__ .'/dashboardRoutes.php',
    require __DIR__ .'/incomeRoutes.php',
    require __DIR__ .'/expensesRoutes.php',
    require __DIR__ .'/categoriesRoutes.php'
);