
<?php require_once __DIR__ . '/Partials/protectedPageHeader.php';?>

<h4 class="fw-bold mb-3">Dashboard</h4>

<div class="row g-3">
    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Total Income</small>
                <h3 class="fw-bold text-success">₵ <?php echo htmlspecialchars($totalIncome)?></h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Total Expenses</small>
                <h3 class="fw-bold text-danger">₵ <?php echo htmlspecialchars($totalExpenses)?></h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Balance</small>
                <h3 class="fw-bold">₵ <?php echo htmlspecialchars($totalIncome)?></h3>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/Partials/protectedPageFooter.php';?>

