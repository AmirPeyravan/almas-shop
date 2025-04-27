<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام در فروشگاه آنلاین الماس</title>
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
        
        .register-container {
            max-width: 500px;
            width: 100%;
            padding: 0;
        }
        
        .register-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .register-header {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }
        
        .register-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 40px;
            background: var(--card-bg);
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
        }
        
        .register-logo {
            font-weight: 700;
            font-size: 2.2rem;
            color: white;
            margin-bottom: 5px;
            display: inline-block;
        }
        
        .register-logo i {
            color: white;
            margin-left: 5px;
        }
        
        .register-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }
        
        .register-body {
            padding: 30px 25px;
        }
        
        .register-title {
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
        
        .form-check-input {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
        }
        
        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            color: var(--text-muted);
            transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem);
        }
        
        .btn-register {
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
        
        .btn-register:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }
        
        .btn-register i {
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
        
        .social-register {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .social-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .social-btn.google:hover {
            background: #EA4335;
        }
        
        .social-btn.facebook:hover {
            background: #3b5998;
        }
        
        .social-btn.twitter:hover {
            background: #1DA1F2;
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            color: var(--text-muted);
        }
        
        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .login-link a:hover {
            color: var(--light);
            text-decoration: underline;
        }
        
        .password-toggle {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: var(--text-muted);
            cursor: pointer;
            z-index: 10;
            padding: 5px;
        }
        
        .password-toggle:hover {
            color: var(--primary);
        }
        
        .form-floating-password {
            position: relative;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .register-container {
            animation: fadeIn 0.6s ease forwards;
        }
        
        /* Responsive */
        @media (max-width: 576px) {
            .register-container {
                padding: 0 15px;
            }
            
            .register-header {
                padding: 25px 15px;
            }
            
            .register-body {
                padding: 25px 15px;
            }
            
            .register-logo {
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
        
        .form-check {
            padding-right: 1.5em;
            padding-left: 0;
        }
        
        .form-check .form-check-input {
            float: right;
            margin-right: -1.5em;
            margin-left: 0;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <div class="register-logo">
                    <i class="bi bi-gem"></i>الماس
                </div>
                <div class="register-subtitle">فروشگاه آنلاین محصولات الکترونیکی</div>
            </div>
            <div class="register-body">
                <h3 class="register-title">ثبت نام در الماس</h3>
                
                <form action="#" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="نام" required>
                        <label for="firstName">نام</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="نام خانوادگی" required>
                        <label for="lastName">نام خانوادگی</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری" required>
                        <label for="username">نام کاربری</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل" required>
                        <label for="email">ایمیل</label>
                    </div>
                    
                    <div class="form-floating form-floating-password mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور" required>
                        <label for="password">رمز عبور</label>
                        <span class="password-toggle" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>
                    
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">
                            با <a href="#" class="text-primary">قوانین و مقررات</a> سایت موافقم
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-register">
                        <i class="bi bi-person-plus"></i>
                        ثبت نام
                    </button>
                </form>
                
                <div class="divider">یا ثبت نام با</div>
                
                <div class="social-register">
                    <a href="#" class="social-btn google">
                        <i class="bi bi-google"></i>
                    </a>
                    <a href="#" class="social-btn facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="social-btn twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                </div>
                
                <div class="login-link">
                    قبلاً ثبت نام کرده‌اید؟ <a href="#">ورود به حساب</a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Toggle eye icon
            this.querySelector('i').classList.toggle('bi-eye');
            this.querySelector('i').classList.toggle('bi-eye-slash');
        });
    </script>
</body>
</html>