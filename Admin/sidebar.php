<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    /* Sidebar Main Container */
    #sidebar-wrapper {
        min-height: 100vh;
        width: 260px;
        background: #1e2229; /* Deep charcoal blue */
        color: #dee2e6;
        box-shadow: 4px 0 10px rgba(0,0,0,0.1);
        z-index: 1000;
    }

    /* Heading Section */
    .sidebar-heading {
        padding: 2rem 1.5rem;
        font-size: 1.4rem;
        font-weight: 800;
        color: #ffffff;
        background: linear-gradient(45deg, #0d6efd, #0099ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }

    /* List Items Styling */
    .list-group-item {
        margin: 5px 15px;
        border-radius: 8px !important;
        border: none;
        padding: 12px 18px;
        font-weight: 500;
        transition: all 0.3s ease;
        background-color: transparent;
        color: #98a6ad;
    }

    /* Hover Effect */
    .list-group-item:hover {
        background-color: rgba(255, 255, 255, 0.05) !important;
        color: #ffffff !important;
        transform: translateX(5px);
    }

    /* Active Link Styling */
    .list-group-item.active {
        background: linear-gradient(45deg, #0d6efd, #0b5ed7) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
    }

    /* Sidebar Icons */
    .list-group-item i {
        font-size: 1.1rem;
        margin-right: 12px;
        vertical-align: middle;
    }

    /* Section Label */
    .sidebar-section-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #4b545c;
        margin: 25px 0 10px 30px;
        font-weight: 700;
    }

    /* Logout Specific */
    .text-danger:hover {
        background-color: rgba(220, 53, 69, 0.1) !important;
    }
</style>

</head>
<body>

    <div id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <i class="bi bi-rocket-takeoff-fill"></i><span class="text-success">NEX</span><span>CART</span>
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