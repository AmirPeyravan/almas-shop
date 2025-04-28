<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پروفایل کاربری - فروشگاه آنلاین الماس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700;900&display=swap');
        
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #10b981;
            --dark: #1e1e2d;
            --darker: #151521;
            --light: #e0e0e0;
            --card-bg: #252836;
            --accent: #f43f5e;
            --text-muted: #94a3b8;
            --success: #059669;
            --warning: #f59e0b;
            --danger: #dc2626;
        }
        
        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: var(--darker);
            color: var(--light);
            min-height: 100vh;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234f46e5' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            z-index: -1;
        }
        
        .profile-container {
            max-width: 950px;
            margin: 0 auto;
            padding: 20px 0;
            animation: fadeIn 0.6s ease forwards;
        }
        
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .store-logo {
            font-weight: 700;
            font-size: 2.2rem;
            color: white;
            display: inline-block;
            text-decoration: none;
        }
        
        .store-logo i {
            color: white;
            margin-left: 5px;
        }
        
        .title-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 25px 20px;
            text-align: center;
            position: relative;
            border-radius: 15px 15px 0 0;
            margin-bottom: 30px;
        }
        
        .title-card::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 40px;
            background: var(--card-bg);
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
        }
        
        .title-card h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.8rem;
            color: white;
        }
        
        .title-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            margin-top: 5px;
        }
        
        .content-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
            margin-bottom: 20px;
        }
        
        .profile-info {
            display: flex;
            align-items: center;
            padding: 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-left: 25px;
            overflow: hidden;
            border: 3px solid var(--primary);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .avatar-placeholder {
            font-size: 3.5rem;
            color: rgba(255, 255, 255, 0.5);
        }
        
        .profile-details {
            flex: 1;
        }
        
        .user-name {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: white;
        }
        
        .user-info {
            color: var(--text-muted);
            font-size: 1rem;
            margin-bottom: 15px;
        }
        
        .user-badges {
            display: flex;
            gap: 10px;
        }
        
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .badge-primary {
            background-color: rgba(99, 102, 241, 0.2);
            color: var(--primary);
        }
        
        .badge-success {
            background-color: rgba(16, 185, 129, 0.2);
            color: var(--secondary);
        }
        
        .badge i {
            margin-left: 5px;
            font-size: 0.9em;
        }
        
        .edit-profile-btn {
            background-color: rgba(255, 255, 255, 0.08);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 8px 15px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .edit-profile-btn:hover {
            background-color: rgba(255, 255, 255, 0.15);
        }
        
        .edit-profile-btn i {
            margin-left: 5px;
        }
        
        .section-heading {
            padding: 20px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .section-heading h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.2rem;
            color: white;
        }
        
        .info-list {
            padding: 20px 30px;
        }
        
        .info-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            width: 120px;
            color: var(--text-muted);
            font-size: 0.95rem;
        }
        
        .info-value {
            flex: 1;
            color: white;
            font-weight: 500;
        }
        
        .action-link {
            color: var(--primary);
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        
        .action-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .action-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--light);
            transition: all 0.2s ease;
            margin-right: 10px;
        }
        
        .action-icon:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .form-row {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-size: 0.95rem;
            color: var(--text-muted);
            margin-bottom: 8px;
        }
        
        .form-control {
            width: 100%;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 8px;
            padding: 0 15px;
            font-size: 1rem;
            transition: all 0.2s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }
        
        .save-btn {
            background: var(--secondary);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .save-btn:hover {
            background: #0da56e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }
        
        .cancel-btn {
            background: transparent;
            color: var(--text-muted);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-top: 10px;
            margin-right: 10px;
        }
        
        .cancel-btn:hover {
            background: rgba(255, 255, 255, 0.05);
            color: white;
        }
        
        .setting-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .setting-row:last-child {
            border-bottom: none;
        }
        
        .setting-info {
            flex: 1;
        }
        
        .setting-title {
            font-weight: 500;
            color: white;
            margin-bottom: 5px;
        }
        
        .setting-desc {
            color: var(--text-muted);
            font-size: 0.9rem;
        }
        
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 48px;
            height: 24px;
        }
        
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.15);
            transition: .4s;
            border-radius: 34px;
        }
        
        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            right: 4px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .toggle-slider {
            background-color: var(--secondary);
        }
        
        input:checked + .toggle-slider:before {
            transform: translateX(-24px);
        }
        
        .orders-card {
            padding: 5px 0;
        }
        
        .order-item {
            padding: 20px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s ease;
        }
        
        .order-item:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }
        
        .order-item:last-child {
            border-bottom: none;
        }
        
        .order-id {
            font-weight: 600;
            color: white;
            margin-bottom: 8px;
        }
        
        .order-date {
            color: var(--text-muted);
            font-size: 0.9rem;
        }
        
        .order-status {
            display: inline-flex;
            align-items: center;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .status-delivered {
            background-color: rgba(16, 185, 129, 0.15);
            color: var(--secondary);
        }
        
        .status-shipping {
            background-color: rgba(245, 158, 11, 0.15);
            color: var(--warning);
        }
        
        .status-processing {
            background-color: rgba(99, 102, 241, 0.15);
            color: var(--primary);
        }
        
        .status-canceled {
            background-color: rgba(220, 38, 38, 0.15);
            color: var(--danger);
        }
        
        .order-amount {
            font-weight: 600;
            color: white;
            text-align: left;
        }
        
        .order-products {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 3px;
            text-align: left;
        }
        
        .view-details {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .view-details:hover {
            color: var(--primary-dark);
        }
        
        .view-details i {
            margin-right: 5px;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .profile-info {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-avatar {
                margin: 0 0 20px 0;
            }
            
            .user-badges {
                justify-content: center;
            }
            
            .order-item {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .order-status {
                margin: 10px 0;
            }
            
            .view-details {
                margin-top: 10px;
            }
            
            .info-item {
                flex-direction: column;
            }
            
            .info-label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
        
        @media (max-width: 576px) {
            .profile-container {
                padding: 10px;
            }
            
            .store-logo {
                font-size: 1.8rem;
            }
            
            .title-card h2 {
                font-size: 1.5rem;
            }
            
            .title-subtitle {
                font-size: 1rem;
            }
            
            .user-name {
                font-size: 1.3rem;
            }
            
            .profile-info,
            .info-list,
            .order-item {
                padding: 15px;
            }
            
            .section-heading {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="header">
            <a href="#" class="store-logo">
                <i class="bi bi-gem"></i>الماس
            </a>
        </div>
        
        <div class="content-card">
            <div class="title-card">
                <h2>پروفایل کاربری</h2>
                <div class="title-subtitle">مدیریت اطلاعات حساب کاربری</div>
            </div>
            
            <div class="profile-info">
                <div class="profile-avatar">
                    <div class="avatar-placeholder">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="profile-details">
                    <div class="user-name">علی محمدی</div>
                    <div class="user-info">عضویت از ۱۴۰۲/۰۶/۱۵</div>
                    <div class="user-badges">
                        <span class="badge badge-primary">
                            <i class="bi bi-gem"></i>
                            کاربر نقره‌ای
                        </span>
                        <span class="badge badge-success">
                            <i class="bi bi-shield-check"></i>
                            تایید هویت شده
                        </span>
                    </div>
                </div>
                <button class="edit-profile-btn">
                    <i class="bi bi-pencil"></i>
                    ویرایش پروفایل
                </button>
            </div>
            
            <div class="section-heading">
                <h3>اطلاعات شخصی</h3>
            </div>
            
            <div class="info-list">
                <div class="info-item">
                    <div class="info-label">نام و نام خانوادگی</div>
                    <div class="info-value">علی محمدی</div>
                </div>
                <div class="info-item">
                    <div class="info-label">شماره موبایل</div>
                    <div class="info-value">۰۹۱۲۳۴۵۶۷۸۹</div>
                </div>
                <div class="info-item">
                    <div class="info-label">پست الکترونیک</div>
                    <div class="info-value">ali.mohammadi@example.com</div>
                </div>
                <div class="info-item">
                    <div class="info-label">کد ملی</div>
                    <div class="info-value">۱۲۳۴۵۶۷۸۹۰</div>
                </div>
                <div class="info-item">
                    <div class="info-label">رمز عبور</div>
                    <div class="info-value">••••••••• <a href="#" class="action-link">تغییر رمز عبور</a></div>
                </div>
            </div>
        </div>
        
        <div class="content-card">
            <div class="section-heading">
                <h3>سفارش‌های اخیر</h3>
                <a href="#" class="action-link">مشاهده همه</a>
            </div>
            
            <div class="orders-card">
                <div class="order-item">
                    <div>
                        <div class="order-id">سفارش #۱۲۳۴۵۶</div>
                        <div class="order-date">۱۴۰۴/۰۲/۱۵</div>
                    </div>
                    <div class="order-status status-delivered">تحویل داده شده</div>
                    <div>
                        <div class="order-amount">۸,۹۰۰,۰۰۰ تومان</div>
                        <div class="order-products">۲ کالا</div>
                    </div>
                    <a href="#" class="view-details">
                        <i class="bi bi-eye"></i>
                        جزئیات
                    </a>
                </div>
                
                <div class="order-item">
                    <div>
                        <div class="order-id">سفارش #۱۲۳۴۲۰</div>
                        <div class="order-date">۱۴۰۴/۰۲/۰۸</div>
                    </div>
                    <div class="order-status status-shipping">در حال ارسال</div>
                    <div>
                        <div class="order-amount">۱۸,۲۵۰,۰۰۰ تومان</div>
                        <div class="order-products">۱ کالا</div>
                    </div>
                    <a href="#" class="view-details">
                        <i class="bi bi-eye"></i>
                        جزئیات
                    </a>
                </div>
                
                <div class="order-item">
                    <div>
                        <div class="order-id">سفارش #۱۲۳۳۵۹</div>
                        <div class="order-date">۱۴۰۴/۰۱/۲۵</div>
                    </div>
                    <div class="order-status status-processing">در حال پردازش</div>
                    <div>
                        <div class="order-amount">۴۲,۹۹۰,۰۰۰ تومان</div>
                        <div class="order-products">۱ کالا</div>
                    </div>
                    <a href="#" class="view-details">
                        <i class="bi bi-eye"></i>
                        جزئیات
                    </a>
                </div>
                
                <div class="order-item">
                    <div>
                        <div class="order-id">سفارش #۱۲۳۱۸۷</div>
                        <div class="order-date">۱۴۰۴/۰۱/۱۰</div>
                    </div>
                    <div class="order-status status-canceled">لغو شده</div>
                    <div>
                        <div class="order-amount">۹,۸۵۰,۰۰۰ تومان</div>
                        <div class="order-products">۱ کالا</div>
                    </div>
                    <a href="#" class="view-details">
                        <i class="bi bi-eye"></i>
                        جزئیات
                    </a>
                </div>
            </div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>