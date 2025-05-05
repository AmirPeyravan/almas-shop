<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام در فروشگاه آنلاین الماس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/auth-css/register.css" >
    <link rel="stylesheet" href="/notification/not.css">
</head>
<body>
<script src="/notification/not.js"></script>

@if(session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showNotification('error', 'خطا', '{{ session('error') }}');
        });
    </script>
@endif

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showNotification('success', 'عملیات موفق', '{{ session('success') }}');

            setTimeout(function() {
                window.location.href = "{{ url('login') }}";
            }, 4500);
        });
    </script>
@endif

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

                <form method="post" action="{{ route('auth.register') }}">
                @csrf
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

                <div class="social-login">
                    <a href="{{ url('/auth/google') }}" class="social-btn google">
                        <i class="bi bi-google"></i>
                    </a>
                </div>

                <div class="login-link">
                    قبلاً ثبت نام کرده‌اید؟ <a href="/login">ورود به حساب</a>
                </div>
            </div>
        </div>
    </div>

    <script src="/notification/not.js"></script>
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
