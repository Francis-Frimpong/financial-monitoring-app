<?php require_once __DIR__ . '/Partials/protectedPageHeader.php';?>
<h4 class="fw-bold mb-3">Add Expense</h4>

<div class="card shadow-sm">
    <div class="card-body">
        <form>
            <!-- Amount -->
            <div class="mb-3">
                <label class="form-label">Amount</label>
                <input 
                    type="number" 
                    class="form-control" 
                    placeholder="e.g. 50"
                    required
                >
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select class="form-select" required>
                    <option value="">Select category</option>
                    <option>Food</option>
                    <option>Transport</option>
                    <option>Rent</option>
                    <option>Utilities</option>
                </select>
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input 
                    type="date" 
                    class="form-control" 
                    required
                >
            </div>

            <!-- Note -->
            <div class="mb-3">
                <label class="form-label">Note (optional)</label>
                <textarea 
                    class="form-control" 
                    rows="3"
                    placeholder="What was this expense for?"
                ></textarea>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-2">
                <button class="btn btn-danger">
                    Save Expense
                </button>

                <a href="expenses.html" class="btn btn-outline-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/Partials/protectedPageFooter.php';?>
