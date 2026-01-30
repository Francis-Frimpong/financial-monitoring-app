
<?php require_once __DIR__ . '/Partials/protectedPageHeader.php';?>

<h4 class="fw-bold mb-3">Categories</h4>

<form class="mb-3">
    <input type="text" class="form-control mb-2" placeholder="Category name">
    <button class="btn btn-primary w-100">Add Category</button>
</form>

<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between">
        Food
        <button class="btn btn-sm btn-outline-danger">Delete</button>
    </li>
</ul>

<?php require_once __DIR__ . '/Partials/protectedPageFooter.php';?>

