
<?php require_once __DIR__ . '/Partials/protectedPageHeader.php';?>

<h4 class="fw-bold mb-3">Dashboard</h4>

<h5 class="mb-3">Overall Summary</h5>

<div class="row g-3">
    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Total Income</small>
                <h3 class="fw-bold text-success">₵ <?php echo htmlspecialchars(number_format($totalIncome, 2))?></h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Total Expenses</small>
                <h3 class="fw-bold text-danger">₵ <?php echo htmlspecialchars(number_format($totalExpenses, 2))?></h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Balance</small>
                <h3 class="fw-bold">₵ <?php echo htmlspecialchars(number_format($balance, 2))?></h3>
            </div>
        </div>
    </div>
</div>

<hr class="my-4">

<!-- ===================== -->
<!-- MONTHLY FILTER SECTION -->
<!-- ===================== -->

<h5 class="mb-3">Monthly Summary</h5>



<div class="card shadow-sm mb-4">
    <div class="card-body">
        <form method="GET" action="" class="row g-2 align-items-end">
            
            <div class="col-12 col-md-4">
                <label class="form-label">Month</label>
                <select name="month" class="form-select">
                    <?php for ($m = 1; $m <= 12; $m++): ?>
                        <option value="<?= $m ?>" 
                            <?= ($m == $currentMonth) ? 'selected' : '' ?>>
                            <?= date('F', mktime(0, 0, 0, $m, 10)) ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="col-12 col-md-4">
                <label class="form-label">Year</label>
                <select name="year" class="form-select">
                    <?php 
                        $startYear = date('Y') - 5;
                        $endYear   = date('Y') + 1;
                        for ($y = $startYear; $y <= $endYear; $y++): 
                    ?>
                        <option value="<?= $y ?>" 
                            <?= ($y == $currentYear) ? 'selected' : '' ?>>
                            <?= $y ?>
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="col-12 col-md-4">
                <button type="submit" class="btn btn-primary w-100">
                    Filter
                </button>
            </div>

        </form>
    </div>
</div>

<!-- ===================== -->
<!-- MONTHLY RESULT CARDS -->
<!-- ===================== -->

<div class="row g-3">

    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>
                    Income (<?= date('F', mktime(0,0,0,$currentMonth,1)) ?> <?= $currentYear ?>)
                </small>
                <h3 class="fw-bold text-success">
                    ₵ <?= htmlspecialchars(number_format($monthlyIncome, 2)) ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Expenses</small>
                <h3 class="fw-bold text-danger">
                    ₵ <?= htmlspecialchars(number_format($monthlyExpenses, 2)) ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <small>Monthly Balance</small>
                <h3 class="fw-bold <?= ($monthlyBalance < 0) ? 'text-danger' : 'text-success' ?>">
                    ₵ <?= htmlspecialchars(number_format($monthlyBalance, 2)) ?>
                </h3>

                <?php if ($monthlyBalance < 0): ?>
                    <small class="text-danger">You overspent this month</small>
                <?php else: ?>
                    <small class="text-success">Good financial control 👍</small>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<?php require_once __DIR__ . '/Partials/protectedPageFooter.php';?>

