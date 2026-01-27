<?php require_once __DIR__ . '/../Partials/login-registerHeader.php';?>


<!-- Login Form -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm w-100" style="max-width: 420px;">
        <div class="card-body p-4">
            <h4 class="text-center fw-bold mb-3">Login</h4>

            <form>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="you@email.com" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" required>
                </div>

                <button class="btn btn-primary w-100">
                    Login
                </button>
            </form>

            <p class="text-center mt-3 mb-0">
                Don’t have an account?
                <a href="/financial-monitoring-app/register">Register</a>
            </p>
        </div>
    </div>


<?php require_once __DIR__ . '/../Partials/login-registerHeader.php';?>