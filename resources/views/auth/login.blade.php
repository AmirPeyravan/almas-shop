<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به فروشگاه آنلاین الماس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/auth-css/login.css" >
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
                window.location.href = "{{ url('profile') }}";
            }, 3000);
        });
    </script>
@endif

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <i class="bi bi-gem"></i>الماس
                </div>
                <div class="login-subtitle">فروشگاه آنلاین محصولات الکترونیکی</div>
            </div>
            <div class="login-body">
                <h3 class="login-title">ورود به حساب کاربری</h3>

                    <form action="{{ route('auth.login') }}" method="post">
                        @csrf

{{--                        <input type="hidden" name="user_id" value="{{ $user->id }}">--}}

                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری" required>
                            <label for="username">نام کاربری</label>
                        </div>

                        <div class="form-floating form-floating-password mb-4">
                            <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور" required>
                            <label for="password">رمز عبور</label>
                            <span class="password-toggle" id="togglePassword">
                            <i class="bi bi-eye"></i>
                        </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">
                                    مرا به خاطر بسپار
                                </label>
                            </div>
                            <a href="#" class="forgot-password">فراموشی رمز عبور؟</a>
                        </div>

                        <button type="submit" class="btn btn-login">
                            <i class="bi bi-box-arrow-in-left"></i>
                            ورود به حساب
                        </button>
                    </form>
                    </form>

                <div class="divider">یا ورود با</div>

                <div class="social-login">
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

                <div class="register-link">
                    حساب کاربری ندارید؟ <a href="/register">ثبت نام کنید</a>
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
