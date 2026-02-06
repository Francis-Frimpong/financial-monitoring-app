<?php require_once __DIR__ . '/Partials/protectedPageHeader.php';?>

<h4 class="fw-bold mb-3">Add Income</h4>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="POST" action="/financial-monitoring-app/Add-Income">
            <!-- Amount -->
            <div class="mb-3">
                <label class="form-label">Amount</label>
                <input 
                    type="number" 
                    class="form-control" 
                    name="amount"
                    placeholder="e.g. 1500"
                    required
                >
            </div>

            <!-- Source -->
            <div class="mb-3">
                <label class="form-label">Source</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="source"
                    placeholder="Salary, Freelance, Business"
                    required
                >
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input 
                    type="date" 
                    class="form-control" 
                    name="date"
                    required
                >
            </div>

            <!-- Note -->
            <div class="mb-3">
                <label class="form-label">Note (optional)</label>
                <textarea 
                    class="form-control" 
                    name="note"
                    rows="3"
                    placeholder="Any extra details..."
                ></textarea>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-2">
                <button class="btn btn-primary">
                    Save Income
                </button>

                <a href="/financial-monitoring-app/Income" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/Partials/protectedPageFooter.php';?>

