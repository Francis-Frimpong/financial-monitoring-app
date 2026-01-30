<?php require_once __DIR__ . '/Partials/protectedPageHeader.php';?>

<h4 class="fw-bold mb-3">Expenses</h4>

<a href="expenses-add.html" class="btn btn-danger mb-3">
    + Add Expense
</a>



<div class="card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Source</th>
                    <th>Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2026-01-10</td>
                    <td>Salary</td>
                    <td>₵ 2,000</td>
                    <td>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php require_once __DIR__ . '/Partials/protectedPageFooter.php';?>
