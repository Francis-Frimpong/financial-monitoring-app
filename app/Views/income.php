<?php require_once __DIR__ . '/Partials/protectedPageHeader.php';?>

<h4 class="fw-bold mb-3">Income</h4>

<a href="/financial-monitoring-app/Add-Income" class="btn btn-primary mb-3">
    + Add Income
</a>


<div class="card">
    <div class="card-body">
        <h2 class="h5 text-primary mb-3">Income Records</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Source</th>
                        <th>Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (empty($row)): ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                No record has been created!
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($row as $incomeData): ?>
                            <tr>
                                <td><?= htmlspecialchars($incomeData['income_date']) ?></td>
                                <td><?= htmlspecialchars($incomeData['source']) ?></td>
                                <td>₵ <?= htmlspecialchars($incomeData['amount']) ?></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/Partials/protectedPageFooter.php';?>
