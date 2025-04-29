<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت - فروشگاه آنلاین الماس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <button class="mobile-toggle">
                <i class="bi bi-x-lg"></i>
            </button>
            <a href="#" class="store-logo">
                <i class="bi bi-gem"></i>الماس
            </a>
            <div class="admin-tag">پنل مدیریت</div>
        </div>
        <div class="sidebar-menu">
            <p class="menu-heading">عمومی</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#dashboard" class="nav-link active" data-section="dashboard">
                        <i class="bi bi-grid-1x2-fill"></i>
                        داشبورد
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#orders" class="nav-link" data-section="orders">
                        <i class="bi bi-bag-fill"></i>
                        سفارشات
                        <span class="nav-badge">12</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#products" class="nav-link" data-section="products">
                        <i class="bi bi-box-seam-fill"></i>
                        محصولات
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#customers" class="nav-link" data-section="customers">
                        <i class="bi bi-people-fill"></i>
                        مشتریان
                    </a>
                </li>
            </ul>
            
            <p class="menu-heading">مدیریت فروشگاه</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#categories" class="nav-link" data-section="categories">
                        <i class="bi bi-tag-fill"></i>
                        دسته‌بندی‌ها
                    </a>
                </li>
            </ul>
            
            <p class="menu-heading">تنظیمات</p>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#store-info" class="nav-link" data-section="store-info">
                        <i class="bi bi-shop"></i>
                        اطلاعات فروشگاه
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#admin-users" class="nav-link" data-section="admin-users">
                        <i class="bi bi-person-fill-gear"></i>
                        کاربران مدیریت
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#system-settings" class="nav-link" data-section="system-settings">
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
        
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">داشبورد</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                    <li class="breadcrumb-item active" aria-current="page">داشبورد</li>
                </ol>
            </nav>
        </div>
        
        <!-- Dashboard Stats -->
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <div class="stats-card-header">
                        <h5 class="stats-card-title">فروش امروز</h5>
                        <div class="stats-card-icon icon-primary">
                            <i class="bi bi-graph-up"></i>
                        </div>
                    </div>
                    <h3 class="stats-card-value">۱۲,۵۴۰,۰۰۰ تومان</h3>
                    <p class="stats-card-desc">
                        <span class="stats-trend trend-up">
                            <i class="bi bi-arrow-up"></i> ۱۲.۵٪
                        </span>
                        نسبت به روز قبل
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <div class="stats-card-header">
                        <h5 class="stats-card-title">سفارشات جدید</h5>
                        <div class="stats-card-icon icon-success">
                            <i class="bi bi-bag"></i>
                        </div>
                    </div>
                    <h3 class="stats-card-value">۴۸</h3>
                    <p class="stats-card-desc">
                        <span class="stats-trend trend-up">
                            <i class="bi bi-arrow-up"></i> ۸.۲٪
                        </span>
                        نسبت به هفته گذشته
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <div class="stats-card-header">
                        <h5 class="stats-card-title">کاربران جدید</h5>
                        <div class="stats-card-icon icon-warning">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                    <h3 class="stats-card-value">۱۵۴</h3>
                    <p class="stats-card-desc">
                        <span class="stats-trend trend-up">
                            <i class="bi bi-arrow-up"></i> ۵.۳٪
                        </span>
                        نسبت به ماه گذشته
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="stats-card">
                    <div class="stats-card-header">
                        <h5 class="stats-card-title">نرخ بازگشت</h5>
                        <div class="stats-card-icon icon-danger">
                            <i class="bi bi-box-arrow-in-left"></i>
                        </div>
                    </div>
                    <h3 class="stats-card-value">۲.۴٪</h3>
                    <p class="stats-card-desc">
                        <span class="stats-trend trend-down">
                            <i class="bi bi-arrow-down"></i> ۰.۵٪
                        </span>
                        نسبت به ماه گذشته
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Recent Orders -->
        <div class="row recent-orders">
            <div class="col-lg-8">
                <div class="content-card">
                    <div class="content-card-header">
                        <h5 class="content-card-title">سفارشات اخیر</h5>
                        <div class="content-card-actions">
                            <button class="btn btn-custom btn-outline">
                                <i class="bi bi-download"></i>
                                خروجی
                            </button>
                            <button class="btn btn-custom btn-primary-custom" data-bs-toggle="modal" data-bs-target="#newOrderModal">
                                <i class="bi bi-plus-lg"></i>
                                سفارش جدید
                            </button>
                        </div>
                    </div>
                    <div class="content-card-body">
                        <div class="table-responsive">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>شماره</th>
                                        <th>مشتری</th>
                                        <th>تاریخ</th>
                                        <th>مبلغ</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD-۷۸۵۲</td>
                                        <td>
                                            <div class="user-info">
                                                <div class="user-avatar">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="user-details">
                                                    <div class="user-name">رضا حسینی</div>
                                                    <div class="user-email">reza@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>۹ اردیبهشت ۱۴۰۴</td>
                                        <td>۳,۵۴۰,۰۰۰ تومان</td>
                                        <td>
                                            <span class="status-badge badge-active">تکمیل شده</span>
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="action-btn edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="action-btn delete">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-۷۸۵۱</td>
                                        <td>
                                            <div class="user-info">
                                                <div class="user-avatar">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="user-details">
                                                    <div class="user-name">سارا احمدی</div>
                                                    <div class="user-email">sara@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>۸ اردیبهشت ۱۴۰۴</td>
                                        <td>۱,۸۲۰,۰۰۰ تومان</td>
                                        <td>
                                            <span class="status-badge badge-processing">در حال پردازش</span>
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="action-btn edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="action-btn delete">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-۷۸۵۰</td>
                                        <td>
                                            <div class="user-info">
                                                <div class="user-avatar">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="user-details">
                                                    <div class="user-name">مهدی کریمی</div>
                                                    <div class="user-email">mehdi@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>۷ اردیبهشت ۱۴۰۴</td>
                                        <td>۵,۱۶۰,۰۰۰ تومان</td>
                                        <td>
                                            <span class="status-badge badge-pending">در انتظار پرداخت</span>
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="action-btn edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="action-btn delete">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-۷۸۴۹</td>
                                        <td>
                                            <div class="user-info">
                                                <div class="user-avatar">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="user-details">
                                                    <div class="user-name">زهرا محمودی</div>
                                                    <div class="user-email">zahra@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>۶ اردیبهشت ۱۴۰۴</td>
                                        <td>۲,۴۵۰,۰۰۰ تومان</td>
                                        <td>
                                            <span class="status-badge badge-active">تکمیل شده</span>
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view" data-bs-toggle="modal" data-bs-target="#orderDetailsModal">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="action-btn edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="action-btn delete">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="content-card-footer">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">۱</a></li>
                                <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="bi bi-chevron-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            
            <!-- Top Products -->
            <div class="col-lg-4 top-products">
                <div class="content-card">
                    <div class="content-card-header">
                        <h5 class="content-card-title">محصولات پرفروش</h5>
                    </div>
                    <div class="content-card-body">
                        <div class="table-responsive">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>محصول</th>
                                        <th>فروش</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-info">
                                                <div class="product-image">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">گوشی هوشمند XS-۹۰۰</div>
                                                    <div class="product-category">
                                                        <span class="category-badge category-electronics">
                                                            <i class="bi bi-cpu"></i>
                                                            الکترونیک
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price">۶۵,۸۰۰,۰۰۰ تومان</div>
                                            <div class="product-quantity">۴۲ عدد</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-info">
                                                <div class="product-image">
                                                    <i class="bi bi-headphones"></i>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">هدفون بی‌سیم Pro</div>
                                                    <div class="product-category">
                                                        <span class="category-badge category-electronics">
                                                            <i class="bi bi-cpu"></i>
                                                            الکترونیک
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price">۲۴,۵۰۰,۰۰۰ تومان</div>
                                            <div class="product-quantity">۳۷ عدد</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-info">
                                                <div class="product-image">
                                                    <i class="bi bi-watch"></i>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">ساعت هوشمند Ultra</div>
                                                    <div class="product-category">
                                                        <span class="category-badge category-electronics">
                                                            <i class="bi bi-cpu"></i>
                                                            الکترونیک
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price">۱۸,۲۶۰,۰۰۰ تومان</div>
                                            <div class="product-quantity">۲۶ عدد</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="product-info">
                                                <div class="product-image">
                                                    <i class="bi bi-laptop"></i>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">لپ‌تاپ ProBook ۵۰۶۰</div>
                                                    <div class="product-category">
                                                        <span class="category-badge category-electronics">
                                                            <i class="bi bi-cpu"></i>
                                                            الکترونیک
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-price">۱۲,۸۴۵,۰۰۰ تومان</div>
                                            <div class="product-quantity">۱۸ عدد</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="content-card-footer">
                        <a href="#" class="btn btn-custom btn-outline w-100">
                            مشاهده همه محصولات
                        </a>
                    </div>
                </div>
            </div>
        </div>
        

        
        <!-- Order Details Modal -->
        <div class="modal fade" id="orderDetailsModal" tabindex="-1" aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderDetailsModalLabel">جزئیات سفارش <span id="modalOrderId"></span></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>مشتری</h6>
                                <p>رضا حسینی (reza@example.com)</p>
                            </div>
                            <div class="col-md-6">
                                <h6>تاریخ سفارش</h6>
                                <p>۹ اردیبهشت ۱۴۰۴</p>
                            </div>
                            <div class="col-md-6">
                                <h6>مبلغ کل</h6>
                                <p>۳,۵۴۰,۰۰۰ تومان</p>
                            </div>
                            <div class="col-md-6">
                                <h6>وضعیت</h6>
                                <p><span class="status-badge badge-active">تکمیل شده</span></p>
                            </div>
                        </div>
                        <hr>
                        <h6>محصولات سفارش</h6>
                        <div class="table-responsive">
                            <table class="admin-table">
                                <thead>
                                    <tr>
                                        <th>محصول</th>
                                        <th>قیمت واحد</th>
                                        <th>تعداد</th>
                                        <th>قیمت کل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>گوشی هوشمند XS-۹۰۰</td>
                                        <td>۱۶,۵۰۰,۰۰۰ تومان</td>
                                        <td>۱</td>
                                        <td>۱۶,۵۰۰,۰۰۰ تومان</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom btn-outline" data-bs-dismiss="modal">بستن</button>
                        <button type="button" class="btn btn-custom btn-primary-custom">ذخیره تغییرات</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- New Order Modal -->
        <div class="modal fade" id="newOrderModal" tabindex="-1" aria-labelledby="newOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newOrderModalLabel">افزودن سفارش جدید</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="newOrderForm">
                            <div class="mb-3">
                                <label for="productName" class="form-label">نام محصول</label>
                                <input type="text" class="form-control" id="productName" required>
                            </div>
                            <div class="mb-3">
                                <label for="productCategory" class="form-label">دسته‌بندی</label>
                                <select class="form-select" id="productCategory" required>
                                    <option value="electronics">الکترونیک</option>
                                    <option value="fashion">مد و پوشاک</option>
                                    <option value="home">خانه و آشپزخانه</option>
                                    <option value="beauty">آرایشی و بهداشتی</option>
                                    <option value="food">مواد غذایی</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">قیمت (تومان)</label>
                                <input type="number" class="form-control" id="productPrice" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom btn-outline" data-bs-dismiss="modal">لغو</button>
                        <button type="submit" form="newOrderForm" class="btn btn-custom btn-primary-custom">افزودن</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/admin.js"></script>
</body>
</html>