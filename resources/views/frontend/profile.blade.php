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
                

<form id="profileForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="profile-avatar">
        @if($user->profile_image)
            <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="img-fluid" width="150" id="profileImagePreview" onclick="document.getElementById('profile_image_input').click();">
        @else
            <div class="avatar-placeholder" onclick="document.getElementById('profile_image_input').click();">
                <i class="bi bi-person"></i>
            </div>
        @endif
        <input type="file" name="profile_image" id="profile_image_input" style="display: none;" onchange="previewImage()">
    </div>
    <button type="submit" class="btn btn-primary">ذخیره تصویر پروفایل</button>
</form>



                <div class="profile-details">
                <div class="user-name">{{ old('firstName', $user->firstName) }} {{ old('lastName', $user->lastName) }}</div>
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
                    <div class="info-value">{{ old('firstName', $user->firstName) }} {{ old('lastName', $user->lastName) }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">پست الکترونیک</div>
                    <div class="info-value">{{ old('email', $user->email) }}</div>
                </div>

                <div class="info-item">
                    <div class="info-label">نام کاربری</div>
                    <div class="info-value">{{ old('username', $user->username) }}</div>
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
    <script>
    function previewImage() {
        const fileInput = document.getElementById('profile_image_input');
        const preview = document.getElementById('profileImagePreview');
        const file = fileInput.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }

    // ارسال تصویر با استفاده از AJAX
    document.getElementById('profileForm').onsubmit = function(e) {
        e.preventDefault(); // جلوگیری از ارسال معمول فرم

        let formData = new FormData(this);
        
        fetch("{{ route('profile.uploadImage') }}", {
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('تصویر پروفایل با موفقیت ذخیره شد.');
                location.reload(); // برای بارگذاری مجدد صفحه و نمایش تصویر جدید
            } else {
                alert('خطا در ذخیره تصویر');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('خطا در ارسال تصویر');
        });
    };
</script>

</body>
</html>