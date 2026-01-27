<?php require_once __DIR__ . '/../Partials/login-registerHeader.php';?>

<!-- Register Form -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm w-100" style="max-width: 420px;">
        <div class="card-body p-4">
            <h4 class="text-center fw-bold mb-3">Create Account</h4>

            <form>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" required>
                </div>

                <button class="btn btn-success w-100">
                    Register
                </button>
            </form>

            <p class="text-center mt-3 mb-0">
                Already have an account?
                <a href="/financial-monitoring-app/login">Login</a>
            </p>
        </div>
    </div>
</div>


<?php require_once __DIR__ . '/../Partials/login-registerHeader.php';?>
