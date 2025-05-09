<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="#" class="footer-logo">
                    <i class="bi bi-gem"></i>الماس
                </a>
                <p class="footer-text">فروشگاه آنلاین الماس، ارائه دهنده انواع محصولات الکترونیکی با بهترین کیفیت و قیمت مناسب. ما به دنبال ارائه بهترین خدمات به مشتریان عزیز هستیم.</p>
                <div class="footer-social">
                    <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-telegram"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h4 class="footer-title">دسترسی سریع</h4>
                <ul class="footer-links">
                    <li><a href="/"><i class="bi bi-chevron-left"></i>صفحه اصلی</a></li>
                    <li><a href="/search"><i class="bi bi-chevron-left"></i>محصولات</a></li>
                    <li><a href="/about"><i class="bi bi-chevron-left"></i>درباره ما</a></li>
                    <li><a href="/contact"><i class="bi bi-chevron-left"></i>تماس با ما</a></li>
                    <li><a href="/categories"><i class="bi bi-chevron-left"></i>دسته بندی</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h4 class="footer-title">دسته‌بندی‌ها</h4>
                <ul class="footer-links">
                    @foreach($categories as $category)
                        <li><a href="#"><i class="bi bi-chevron-left"></i>{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="footer-title">تماس با ما</h4>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        تهران، خیابان ولیعصر، روبروی پارک ملت، پلاک ۱۲۳
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div>
                        ۰۲۱-۱۲۳۴۵۶۷۸
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div>
                        info@almas-shop.ir
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© تمامی حقوق برای فروشگاه الماس محفوظ است ۱۴۰۴</p>
        </div>
    </div>
</footer>
