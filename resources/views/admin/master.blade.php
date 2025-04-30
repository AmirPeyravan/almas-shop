<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دسته‌بندی‌ها - فروشگاه آنلاین الماس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/admin/master.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <button class="mobile-toggle">
                <i class="bi bi-x-lg"></i>
            </button>
            <a href="/admin" class="store-logo">
                <i class="bi bi-gem"></i>الماس
            </a>
            <div class="admin-tag">پنل مدیریت</div>
        </div>
        <div class="sidebar-menu">
            <p class="menu-heading">عمومی</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/admin/orders" class="nav-link" data-section="orders">
                        <i class="bi bi-bag-fill"></i>
                        سفارشات
                        <span class="nav-badge">12</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/products" class="nav-link" data-section="products">
                        <i class="bi bi-box-seam-fill"></i>
                        محصولات
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/customers" class="nav-link" data-section="customers">
                        <i class="bi bi-people-fill"></i>
                        مشتریان
                    </a>
                </li>
            </ul>
            
            <p class="menu-heading">مدیریت فروشگاه</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/admin/categories" class="nav-link active" data-section="categories">
                        <i class="bi bi-tag-fill"></i>
                        دسته‌بندی‌ها
                    </a>
                </li>
            </ul>
            
            <p class="menu-heading">تنظیمات</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/admin/shopInfo" class="nav-link" data-section="store-info">
                        <i class="bi bi-shop"></i>
                        اطلاعات فروشگاه
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/users" class="nav-link" data-section="admin-users">
                        <i class="bi bi-person-fill-gear"></i>
                        کاربران مدیریت
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/settings" class="nav-link" data-section="system-settings">
                        <i class="bi bi-gear-fill"></i>
                        تنظیمات سیستم
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="top-bar-left">
                <button class="mobile-toggle-main">
                    <i class="bi bi-list"></i>
                </button>
                <div class="search-form">
                    <input type="text" class="search-input" placeholder="جستجو...">
                    <i class="bi bi-search search-icon"></i>
                </div>
            </div>
            <div class="top-bar-actions">
                <button class="action-icon-btn">
                    <i class="bi bi-bell"></i>
                    <span class="notification-badge">5</span>
                </button>
                <button class="action-icon-btn">
                    <i class="bi bi-envelope"></i>
                    <span class="notification-badge">3</span>
                </button>
                <div class="admin-dropdown">
                    <img src="https://via.placeholder.com/150" alt="Admin">
                    <div class="admin-info">
                        <div class="admin-name">علی محمدی</div>
                        <div class="admin-role">مدیر ارشد</div>
                    </div>
                    <i class="bi bi-chevron-down dropdown-toggle"></i>
                </div>
            </div>
        </div>

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/admin/master.js"></script>
</body>
</html>