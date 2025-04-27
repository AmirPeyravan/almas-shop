<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما - فروشگاه آنلاین الماس</title>
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

        .about-container {
            max-width: 700px;
            width: 100%;
            padding: 0;
        }

        .about-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .about-header {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }

        .about-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 40px;
            background: var(--card-bg);
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
        }

        .about-logo {
            font-weight: 700;
            font-size: 2.2rem;
            color: white;
            margin-bottom: 5px;
            display: inline-block;
        }

        .about-logo i {
            color: white;
            margin-left: 5px;
        }

        .about-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        .about-body {
            padding: 30px 25px;
        }

        .about-title {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 25px;
            text-align: center;
            color: white;
        }

        .about-section {
            margin-bottom: 30px;
        }

        .about-section-title {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        .about-section-title i {
            margin-left: 10px;
            font-size: 1.4rem;
        }

        .about-text {
            color: var(--light);
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        .about-text p {
            margin-bottom: 15px;
        }

        .stats-wrapper {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 30px 0;
        }

        .stat-item {
            flex: 0 0 48%;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            background-color: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
            line-height: 1;
        }

        .stat-text {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .team-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }

        .team-member {
            flex: 0 0 48%;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .team-member:hover {
            background-color: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .team-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 15px;
            color: white;
            font-size: 1.8rem;
        }

        .team-info {
            flex: 1;
        }

        .team-name {
            font-weight: 600;
            color: white;
            margin-bottom: 5px;
        }

        .team-position {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .timeline {
            position: relative;
            padding: 20px 0;
            margin: 20px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            height: 100%;
            width: 2px;
            background-color: rgba(255, 255, 255, 0.1);
            right: 11px;
            top: 0;
        }

        .timeline-item {
            padding-right: 35px;
            position: relative;
            margin-bottom: 25px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-badge {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: var(--primary);
            position: absolute;
            right: 0;
            top: 5px;
        }

        .timeline-date {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 0.95rem;
        }

        .timeline-content {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 15px;
        }

        .timeline-title {
            color: white;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .timeline-desc {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin: 0;
        }

        .values-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }

        .value-item {
            flex: 0 0 48%;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(79, 70, 229, 0.1) 100%);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid rgba(99, 102, 241, 0.2);
            transition: all 0.3s ease;
        }

        .value-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: rgba(99, 102, 241, 0.4);
        }

        .value-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: white;
            border-radius: 10px;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .value-title {
            color: white;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .value-desc {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin: 0;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 30px 0;
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

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-action {
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }

        .btn-action i {
            margin-left: 8px;
        }

        .btn-primary-custom {
            background: var(--primary);
            color: white;
            border: none;
        }

        .btn-primary-custom:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }

        .btn-outline-custom {
            background: transparent;
            color: var(--primary);
            border: 1px solid var(--primary);
        }

        .btn-outline-custom:hover {
            background: rgba(99, 102, 241, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.2);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .about-container {
            animation: fadeIn 0.6s ease forwards;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .stat-item,
            .team-member,
            .value-item {
                flex: 0 0 100%;
            }

            .about-body {
                padding: 25px 20px;
            }

            .about-logo {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
<div class="about-container">
    <div class="about-card">
        <div class="about-header">
            <div class="about-logo">
                <i class="bi bi-gem"></i>الماس
            </div>
            <div class="about-subtitle">فروشگاه آنلاین محصولات الکترونیکی</div>
        </div>
        <div class="about-body">
            <h3 class="about-title">درباره فروشگاه الماس</h3>

            <div class="about-section">
                <div class="about-section-title">
                    <i class="bi bi-stars"></i>
                    داستان ما
                </div>
                <div class="about-text">
                    <p>فروشگاه اینترنتی الماس از سال ۱۳۹۵ با هدف ارائه محصولات الکترونیکی با کیفیت و اصل با قیمت مناسب و خدمات پس از فروش عالی فعالیت خود را آغاز کرد. ما در طول این سال‌ها توانسته‌ایم اعتماد هزاران مشتری را جلب کنیم و به یکی از بزرگترین فروشگاه‌های آنلاین محصولات الکترونیکی تبدیل شویم.</p>
                    <p>تیم ما متشکل از متخصصان حوزه فناوری اطلاعات، بازاریابی دیجیتال و خدمات مشتری است که با تلاش مستمر، بهترین تجربه خرید آنلاین را برای مشتریان فراهم می‌کنند. ما مفتخریم که در این سال‌ها توانسته‌ایم به عنوان یکی از معتبرترین فروشگاه‌های آنلاین در زمینه فروش محصولات الکترونیکی شناخته شویم.</p>
                </div>

                <div class="stats-wrapper">
                    <div class="stat-item">
                        <div class="stat-number">۶+</div>
                        <div class="stat-text">سال فعالیت</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">۱۵۰,۰۰۰+</div>
                        <div class="stat-text">مشتری راضی</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">۱۰,۰۰۰+</div>
                        <div class="stat-text">محصول متنوع</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">۹۸٪</div>
                        <div class="stat-text">رضایت مشتریان</div>
                    </div>
                </div>
            </div>

            <div class="divider">ارزش‌های ما</div>

            <div class="values-wrapper">
                <div class="value-item">
                    <div class="value-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="value-title">کیفیت و اصالت</div>
                    <div class="value-desc">تضمین اصالت و کیفیت تمامی محصولات، از مهم‌ترین تعهدات ماست.</div>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="value-title">پشتیبانی عالی</div>
                    <div class="value-desc">همراهی و پاسخگویی به مشتریان، قبل و بعد از خرید، اولویت ماست.</div>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="value-title">تحویل سریع</div>
                    <div class="value-desc">ارسال سریع و مطمئن سفارشات در کوتاه‌ترین زمان ممکن.</div>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <div class="value-title">قیمت منصفانه</div>
                    <div class="value-desc">ارائه محصولات با قیمت منصفانه و رقابتی، بدون واسطه.</div>
                </div>
            </div>

            <div class="divider">تیم ما</div>

            <div class="team-wrapper">
                <div class="team-member">
                    <div class="team-avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">محمد محمدی</div>
                        <div class="team-position">مدیرعامل و بنیانگذار</div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">سارا احمدی</div>
                        <div class="team-position">مدیر بازاریابی</div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">علی حسینی</div>
                        <div class="team-position">مدیر فنی</div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-avatar">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="team-info">
                        <div class="team-name">مریم کریمی</div>
                        <div class="team-position">مدیر خدمات مشتریان</div>
                    </div>
                </div>
            </div>

            <div class="divider">مسیر ما</div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-badge"></div>
                    <div class="timeline-date">۱۳۹۵</div>
                    <div class="timeline-content">
                        <div class="timeline-title">آغاز فعالیت</div>
                        <div class="timeline-desc">راه‌اندازی فروشگاه آنلاین الماس با ارائه محصولات موبایل و لوازم جانبی</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-badge"></div>
                    <div class="timeline-date">۱۳۹۷</div>
                    <div class="timeline-content">
                        <div class="timeline-title">گسترش فعالیت</div>
                        <div class="timeline-desc">افزودن محصولات کامپیوتری و لوازم خانگی الکترونیک به سبد محصولات</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-badge"></div>
                    <div class="timeline-date">۱۳۹۹</div>
                    <div class="timeline-content">
                        <div class="timeline-title">راه‌اندازی مرکز خدمات</div>
                        <div class="timeline-desc">تاسیس مرکز خدمات پس از فروش و گارانتی اختصاصی محصولات</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-badge"></div>
                    <div class="timeline-date">۱۴۰۱</div>
                    <div class="timeline-content">
                        <div class="timeline-title">توسعه سراسری</div>
                        <div class="timeline-desc">افتتاح شعب فیزیکی در چندین شهر بزرگ کشور</div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-badge"></div>
                    <div class="timeline-date">۱۴۰۴</div>
                    <div class="timeline-content">
                        <div class="timeline-title">چشم‌انداز آینده</div>
                        <div class="timeline-desc">بزرگترین فروشگاه آنلاین محصولات الکترونیکی در سطح خاورمیانه</div>
                    </div>
                </div>
            </div>

            <div class="divider">همراه ما باشید</div>

            <div class="about-text text-center">
                <p>ما در الماس، به دنبال ارائه بهترین خدمات و محصولات به مشتریان عزیز هستیم. نظرات، پیشنهادات و انتقادات شما می‌تواند ما را در این مسیر یاری کند.</p>
            </div>

            <div class="action-buttons">
                <a href="/" class="btn btn-primary-custom btn-action">
                    <i class="bi bi-shop"></i>
                    فروشگاه
                </a>
                <a href="/contact" class="btn btn-outline-custom btn-action">
                    <i class="bi bi-chat-dots"></i>
                    تماس با ما
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
