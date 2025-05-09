<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-content text-center">
            <h2 class="newsletter-title animate delay-1">عضویت در خبرنامه</h2>
            <p class="animate delay-2">برای اطلاع از آخرین محصولات و تخفیف‌های ویژه در خبرنامه ما عضو شوید</p>
            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form animate delay-3">
                @csrf
                <div class="position-relative">
                    <input type="email" name="email" class="newsletter-input" placeholder="ایمیل خود را وارد کنید..." required>
                    <button type="submit" class="newsletter-btn">عضویت</button>
                </div>
            </form>
        </div>
    </div>
</section>
