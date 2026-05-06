<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

    <div id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <i class="bi bi-rocket-takeoff-fill"></i> MAMA SHOP
    </div>
    
    <div class="list-group list-group-flush">
        <p class="sidebar-section-label">Main Menu</p>
        
        <a href="dashboard.php" class="list-group-item list-group-item-action <?= ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
            <i class="bi bi-grid-1x2-fill"></i> Dashboard
        </a>
        
        <a href="categories.php" class="list-group-item list-group-item-action <?= ($current_page == 'categories.php') ? 'active' : ''; ?>">
            <i class="bi bi-stack"></i> Categories
        </a>
        
        <a href="products.php" class="list-group-item list-group-item-action <?= ($current_page == 'products.php') ? 'active' : ''; ?>">
            <i class="bi bi-box-seam-fill"></i> Products
        </a>

        <p class="sidebar-section-label">Operations</p>
        
        <a href="orders.php" class="list-group-item list-group-item-action <?= ($current_page == 'orders.php') ? 'active' : ''; ?>">
            <i class="bi bi-cart-check-fill"></i> Orders
        </a>
        
        <a href="users.php" class="list-group-item list-group-item-action <?= ($current_page == 'users.php') ? 'active' : ''; ?>">
            <i class="bi bi-shield-lock-fill"></i> Staff Management
        </a>

        <div style="margin-top: auto; padding-bottom: 20px;">
            <hr class="mx-3 opacity-25">
            <a href="../index.php" class="list-group-item list-group-item-action">
                <i class="bi bi-house-door"></i> View Shop
            </a>
            <a href="../logout.php" class="list-group-item list-group-item-action text-danger">
                <i class="bi bi-power"></i> Logout
            </a>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>