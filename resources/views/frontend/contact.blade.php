<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما - فروشگاه آنلاین الماس</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
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

        .contact-container {
            max-width: 550px;
            width: 100%;
            padding: 0;
        }

        .contact-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .contact-header {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }

        .contact-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 40px;
            background: var(--card-bg);
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
        }

        .contact-logo {
            font-weight: 700;
            font-size: 2.2rem;
            color: white;
            margin-bottom: 5px;
            display: inline-block;
        }

        .contact-logo i {
            color: white;
            margin-left: 5px;
        }

        .contact-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        .contact-body {
            padding: 30px 25px;
        }

        .contact-title {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 25px;
            text-align: center;
            color: white;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .form-floating > label {
            font-family: 'Vazirmatn', sans-serif;
            padding-right: 15px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            height: 55px;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.25);
            color: white;
        }

        textarea.form-control {
            height: auto;
            min-height: 120px;
            resize: vertical;
        }

        .btn-submit {
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            width: 100%;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }

        .btn-submit i {
            margin-right: 8px;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 25px 0;
            color: var(--text-muted);
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .divider::before {
            margin-left: 15px;
        }

        .divider::after {
            margin-right: 15px;
        }

        .contact-info {
            margin-top: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background-color: rgba(255, 255, 255, 0.08);
            transform: translateY(-3px);
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary);
            color: white;
            border-radius: 8px;
            margin-left: 15px;
            font-size: 1.3rem;
        }

        .contact-text {
            flex: 1;
        }

        .contact-text h5 {
            margin: 0 0 5px 0;
            font-size: 1rem;
            color: white;
        }

        .contact-text p {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }

        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .social-btn.instagram:hover {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }

        .social-btn.telegram:hover {
            background: #0088cc;
        }

        .social-btn.whatsapp:hover {
            background: #25D366;
        }

        .social-btn.linkedin:hover {
            background: #0A66C2;
        }

        .home-link {
            text-align: center;
            margin-top: 25px;
            color: var(--text-muted);
        }

        .home-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .home-link a:hover {
            color: var(--light);
            text-decoration: underline;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .contact-container {
            animation: fadeIn 0.6s ease forwards;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .contact-container {
                padding: 0 15px;
            }

            .contact-header {
                padding: 25px 15px;
            }

            .contact-body {
                padding: 25px 15px;
            }

            .contact-logo {
                font-size: 1.8rem;
            }
        }

        /* RTL Specific Styles */
        .form-floating > label {
            right: 0;
            left: auto;
            padding-right: 15px;
            padding-left: 0;
            transform-origin: 100% 0;
        }

        .form-floating > .form-control {
            padding-right: 15px;
        }
    </style>
</head>
<body>
<div class="contact-container">
    <div class="contact-card">
        <div class="contact-header">
            <div class="contact-logo">
                <i class="bi bi-gem"></i>الماس
            </div>
            <div class="contact-subtitle">فروشگاه آنلاین محصولات الکترونیکی</div>
        </div>
        <div class="contact-body">
            <h3 class="contact-title">تماس با ما</h3>

            <form action="#" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="نام و نام خانوادگی" required>
                    <label for="fullName">نام و نام خانوادگی</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل" required>
                    <label for="email">ایمیل</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="شماره تماس">
                    <label for="phone">شماره تماس</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-control" id="subject" name="subject" required>
                        <option value="" selected disabled>انتخاب کنید</option>
                        <option value="support">پشتیبانی محصول</option>
                        <option value="order">پیگیری سفارش</option>
                        <option value="feedback">انتقادات و پیشنهادات</option>
                        <option value="cooperation">همکاری با ما</option>
                        <option value="other">سایر موارد</option>
                    </select>
                    <label for="subject">موضوع</label>
                </div>

                <div class="form-floating mb-4">
                    <textarea class="form-control" id="message" name="message" placeholder="پیام شما" required></textarea>
                    <label for="message">پیام شما</label>
                </div>

                <button type="submit" class="btn btn-submit">
                    <i class="bi bi-send"></i>
                    ارسال پیام
                </button>
            </form>

            <div class="divider">اطلاعات تماس</div>

            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h5>آدرس</h5>
                        <p>تهران، خیابان ولیعصر، خیابان بهشتی، پلاک ۱۲۶، مجتمع تجاری الماس</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div class="contact-text">
                        <h5>تلفن تماس</h5>
                        <p>۰۲۱-۸۸۳۳۶۶۵۵</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h5>ایمیل</h5>
                        <p>info@almas-shop.ir</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <div class="contact-text">
                        <h5>ساعات کاری</h5>
                        <p>شنبه تا چهارشنبه: ۹ صبح تا ۶ عصر | پنجشنبه: ۹ صبح تا ۱ بعدازظهر</p>
                    </div>
                </div>
            </div>

            <div class="divider">ما را در شبکه‌های اجتماعی دنبال کنید</div>

            <div class="social-links">
                <a href="#" class="social-btn instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#" class="social-btn telegram">
                    <i class="bi bi-telegram"></i>
                </a>
                <a href="#" class="social-btn whatsapp">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a href="#" class="social-btn linkedin">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>

            <div class="home-link">
                <a href="/">بازگشت به صفحه اصلی</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
