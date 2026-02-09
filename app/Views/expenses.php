<?php require_once __DIR__ . '/Partials/protectedPageHeader.php'; ?>

<h4 class="fw-bold mb-3">Expenses</h4>

<a href="/financial-monitoring-app/Add-Expenses" class="btn btn-danger mb-3">
    + Add Expense
</a>

<div class="card">
    <div class="card-body">
        <h2 class="h5 text-primary mb-3">Expense Records</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (empty($expenses)): ?>
                        <tr>
                            <td colspan="3" class="text-center text-muted">
                                No record has been created!
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($expenses as $expenseData): ?>
                            <tr>
                                <td><?= htmlspecialchars($expenseData['expense_date']) ?></td>
                                <td>₵ <?= htmlspecialchars($expenseData['amount']) ?></td>
                                <td class="text-center">
                                    <form action="/financial-monitoring-app/delete-expense" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="<?= $expenseData['id'] ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/Partials/protectedPageFooter.php'; ?>
