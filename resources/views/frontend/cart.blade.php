<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید - فروشگاه آنلاین الماس</title>
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
        
        .cart-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px 0;
            animation: fadeIn 0.6s ease forwards;
        }
        
        .cart-header {
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
        
        .cart-title {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 25px 20px;
            text-align: center;
            position: relative;
            border-radius: 15px 15px 0 0;
            margin-bottom: 30px;
        }
        
        .cart-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 40px;
            background: var(--card-bg);
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
        }
        
        .cart-title h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.8rem;
            color: white;
        }
        
        .cart-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
            margin-top: 5px;
        }
        
        .cart-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
            margin-bottom: 20px;
        }
        
        .cart-items {
            padding: 0;
        }
        
        .cart-item {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .cart-item:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }
        
        .cart-item:last-child {
            border-bottom: none;
        }
        
        .item-image {
            width: 80px;
            height: 80px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            margin-left: 15px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .item-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
        
        .item-details {
            flex: 1;
        }
        
        .item-title {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: white;
        }
        
        .item-attributes {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .item-price {
            font-weight: 700;
            color: var(--secondary);
            font-size: 1.1rem;
        }
        
        .item-qty {
            display: flex;
            align-items: center;
            margin: 0 25px;
        }
        
        .qty-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .qty-btn:hover {
            background-color: var(--primary);
        }
        
        .qty-input {
            width: 40px;
            height: 32px;
            background-color: transparent;
            border: none;
            color: white;
            text-align: center;
            font-size: 1rem;
            padding: 0;
            margin: 0 5px;
        }
        
        .item-actions {
            display: flex;
            align-items: center;
        }
        
        .item-subtotal {
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
            margin-left: 20px;
            min-width: 100px;
            text-align: left;
        }
        
        .delete-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: rgba(244, 63, 94, 0.1);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .delete-btn:hover {
            background-color: var(--accent);
            color: white;
        }
        
        .cart-summary {
            padding: 25px;
        }
        
        .summary-title {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: white;
            text-align: center;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .summary-row:last-child {
            border-bottom: none;
        }
        
        .summary-label {
            color: var(--text-muted);
        }
        
        .summary-value {
            font-weight: 600;
            color: white;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-top: 2px solid rgba(255, 255, 255, 0.1);
            margin-top: 15px;
        }
        
        .total-label {
            font-weight: 700;
            font-size: 1.2rem;
            color: white;
        }
        
        .total-value {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--secondary);
        }
        
        .discount-code {
            display: flex;
            margin-top: 20px;
            margin-bottom: 25px;
        }
        
        .discount-input {
            flex: 1;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 8px 0 0 8px;
            padding: 0 15px;
            font-size: 1rem;
        }
        
        .discount-input:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        .apply-btn {
            height: 50px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 0 8px 8px 0;
            padding: 0 20px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .apply-btn:hover {
            background: var(--primary-dark);
        }
        
        .checkout-btn {
            background: var(--secondary);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 15px;
            font-weight: 600;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin-top: 20px;
        }
        
        .checkout-btn:hover {
            background: #0da56e;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }
        
        .checkout-btn i {
            margin-right: 8px;
        }
        
        .continue-shopping {
            text-align: center;
            margin-top: 20px;
        }
        
        .continue-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .continue-link:hover {
            color: var(--light);
        }
        
        .continue-link i {
            margin-left: 5px;
        }
        
        .empty-cart {
            text-align: center;
            padding: 50px 20px;
        }
        
        .empty-cart-icon {
            font-size: 5rem;
            color: var(--text-muted);
            margin-bottom: 20px;
        }
        
        .empty-cart-text {
            font-size: 1.3rem;
            color: white;
            margin-bottom: 30px;
        }
        
        .shop-now-btn {
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .shop-now-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }
        
        .shop-now-btn i {
            margin-left: 8px;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .cart-item {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .item-image {
                margin-bottom: 15px;
                margin-left: 0;
            }
            
            .item-actions {
                width: 100%;
                justify-content: space-between;
                margin-top: 15px;
            }
            
            .item-qty {
                margin: 0;
            }
            
            .item-subtotal {
                margin-left: 0;
            }
        }
        
        @media (max-width: 576px) {
            .cart-container {
                padding: 10px;
            }
            
            .store-logo {
                font-size: 1.8rem;
            }
            
            .cart-title h2 {
                font-size: 1.5rem;
            }
            
            .cart-subtitle {
                font-size: 1rem;
            }
            
            .item-title {
                font-size: 1rem;
            }
            
            .item-price, .item-subtotal {
                font-size: 1rem;
            }
            
            .summary-title {
                font-size: 1.2rem;
            }
            
            .total-label, .total-value {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="cart-container">
        <div class="cart-header">
            <a href="/" class="store-logo">
                <i class="bi bi-gem"></i>الماس
            </a>
        </div>
        
        <div class="cart-card">
            <div class="cart-title">
                <h2>سبد خرید شما</h2>
                <div class="cart-subtitle">مشاهده و ویرایش سبد خرید</div>
            </div>
            
            <div class="cart-items">
                <div class="cart-item">
                    <div class="item-image">
                        <img src="/api/placeholder/80/80" alt="گوشی سامسونگ گلکسی S23 Ultra">
                    </div>
                    <div class="item-details">
                        <div class="item-title">گوشی سامسونگ گلکسی S23 Ultra</div>
                        <div class="item-attributes">رنگ: مشکی | حافظه: 256 گیگابایت</div>
                        <div class="item-price">۴۲,۹۹۰,۰۰۰ تومان</div>
                    </div>
                    <div class="item-qty">
                        <button class="qty-btn">-</button>
                        <input type="number" class="qty-input" value="1" min="1" max="10">
                        <button class="qty-btn">+</button>
                    </div>
                    <div class="item-actions">
                        <div class="item-subtotal">۴۲,۹۹۰,۰۰۰ تومان</div>
                        <button class="delete-btn">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
                
                <div class="cart-item">
                    <div class="item-image">
                        <img src="/api/placeholder/80/80" alt="هدفون بی‌سیم اپل ایرپاد پرو">
                    </div>
                    <div class="item-details">
                        <div class="item-title">هدفون بی‌سیم اپل ایرپاد پرو</div>
                        <div class="item-attributes">نسل دوم | گارانتی اصالت و سلامت فیزیکی</div>
                        <div class="item-price">۹,۸۵۰,۰۰۰ تومان</div>
                    </div>
                    <div class="item-qty">
                        <button class="qty-btn">-</button>
                        <input type="number" class="qty-input" value="1" min="1" max="10">
                        <button class="qty-btn">+</button>
                    </div>
                    <div class="item-actions">
                        <div class="item-subtotal">۹,۸۵۰,۰۰۰ تومان</div>
                        <button class="delete-btn">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
                
                <div class="cart-item">
                    <div class="item-image">
                        <img src="/api/placeholder/80/80" alt="ساعت هوشمند اپل واچ سری ۸">
                    </div>
                    <div class="item-details">
                        <div class="item-title">ساعت هوشمند اپل واچ سری ۸</div>
                        <div class="item-attributes">رنگ: نقره‌ای | سایز: 44mm</div>
                        <div class="item-price">۱۸,۲۵۰,۰۰۰ تومان</div>
                    </div>
                    <div class="item-qty">
                        <button class="qty-btn">-</button>
                        <input type="number" class="qty-input" value="1" min="1" max="10">
                        <button class="qty-btn">+</button>
                    </div>
                    <div class="item-actions">
                        <div class="item-subtotal">۱۸,۲۵۰,۰۰۰ تومان</div>
                        <button class="delete-btn">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cart-card">
            <div class="cart-summary">
                <h4 class="summary-title">خلاصه سفارش</h4>
                
                <div class="summary-row">
                    <div class="summary-label">مجموع قیمت کالاها (۳ کالا)</div>
                    <div class="summary-value">۷۱,۰۹۰,۰۰۰ تومان</div>
                </div>
                
                <div class="summary-row">
                    <div class="summary-label">تخفیف کالاها</div>
                    <div class="summary-value">۰ تومان</div>
                </div>
                
                <div class="summary-row">
                    <div class="summary-label">هزینه ارسال</div>
                    <div class="summary-value">رایگان</div>
                </div>
                
                <div class="discount-code">
                    <input type="text" class="discount-input" placeholder="کد تخفیف">
                    <button class="apply-btn">اعمال</button>
                </div>
                
                <div class="total-row">
                    <div class="total-label">مبلغ قابل پرداخت</div>
                    <div class="total-value">۷۱,۰۹۰,۰۰۰ تومان</div>
                </div>
                
                <button class="checkout-btn">
                    <i class="bi bi-credit-card"></i>
                    ادامه فرآیند خرید
                </button>
                
                <div class="continue-shopping">
                    <a href="#" class="continue-link">
                        <i class="bi bi-arrow-right"></i>
                        ادامه خرید
                    </a>
                </div>
            </div>
        </div>
        
        <!-- نمایش سبد خرید خالی - در حالت عادی مخفی است -->
        <div class="cart-card" style="display: none;">
            <div class="empty-cart">
                <div class="empty-cart-icon">
                    <i class="bi bi-cart-x"></i>
                </div>
                <div class="empty-cart-text">سبد خرید شما خالی است</div>
                <a href="#" class="shop-now-btn">
                    مشاهده محصولات
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
</body>
</html>