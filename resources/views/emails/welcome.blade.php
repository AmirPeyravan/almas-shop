@component('mail::message')
    <style>
        /* استایل‌های کلی */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(90deg, #007bff, #00c4ff);
            padding: 20px;
            text-align: center;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            padding: 30px;
            text-align: right;
            direction: rtl;
        }
        .content h1 {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #e0e0e0;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>

    <div class="container">
        <!-- هدر ایمیل -->
        <div class="header">
            <img src="https://almas-shop.com/logo.png" alt="Almas Shop Logo">
        </div>

        <!-- بدنه ایمیل -->
        <div class="content">
            <h1>خوش آمدید به انجمن الماس شاپ!</h1>
            <p>سلام،</p>
            <p>ما از پیوستن شما به جمع صمیمی الماس شاپ بسیار خوشحالیم! حالا می‌توانید از تمام امکانات جذاب انجمن ما استفاده کنید و تجربه‌ای متفاوت داشته باشید.</p>
            <p>برای شروع، کافیست روی دکمه زیر کلیک کنید:</p>

            @component('mail::button', ['url' => 'https://almas-shop.com/session', 'color' => 'primary'])
                ورود به انجمن
            @endcomponent
        </div>

        <!-- فوتر ایمیل -->
        <div class="footer">
            <p>این ایمیل به شما ارسال شده است زیرا در وبسایت <a href="https://almas-shop.com">الماس شاپ</a> عضو شده‌اید.</p>
            <p>با احترام،<br>تیم <strong>Almas Shop</strong></p>
        </div>
    </div>
@endcomponent
