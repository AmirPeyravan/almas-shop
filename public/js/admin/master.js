document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.querySelector('.mobile-toggle');
    const mobileToggleMain = document.querySelector('.mobile-toggle-main');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    // اطمینان از وجود عناصر
    if (!mobileToggle || !mobileToggleMain || !sidebar || !mainContent) {
        console.error('یکی از عناصر مورد نیاز یافت نشد:', {
            mobileToggle,
            mobileToggleMain,
            sidebar,
            mainContent
        });
        return;
    }

    // باز و بسته کردن سایدبار در موبایل
    mobileToggle.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebar.classList.toggle('active');
        mainContent.classList.toggle('sidebar-active');
        console.log('سایدبار toggled با mobile-toggle');
    });

    mobileToggleMain.addEventListener('click', function(event) {
        event.stopPropagation();
        sidebar.classList.toggle('active');
        mainContent.classList.toggle('sidebar-active');
        console.log('سایدبار toggled با mobile-toggle-main');
    });

    // بستن سایدبار با کلیک خارج از آن
    document.addEventListener('click', function(event) {
        if (
            sidebar.classList.contains('active') &&
            !sidebar.contains(event.target) &&
            !mobileToggleMain.contains(event.target) &&
            !mobileToggle.contains(event.target)
        ) {
            sidebar.classList.remove('active');
            mainContent.classList.remove('sidebar-active');
            console.log('سایدبار بسته شد با کلیک خارج');
        }
    });

    // مدیریت کلیک روی لینک‌های منو و تغییر URL
   // const navLinks = document.querySelectorAll('.nav-link');
    const pageTitle = document.querySelector('.page-title');
    const breadcrumbActive = document.querySelector('.breadcrumb-item.active');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const section = this.getAttribute('data-section');
            const title = this.textContent.trim();

            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            history.pushState({ section }, title, `#${section}`);

            pageTitle.textContent = title;
            breadcrumbActive.textContent = title;

            mainContent.style.opacity = '0';
            mainContent.style.transform = 'translateY(20px)';
            setTimeout(() => {
                mainContent.style.opacity = '1';
                mainContent.style.transform = 'translateY(0)';
            }, 300);

            if (window.innerWidth <= 992) {
                sidebar.classList.remove('active');
                mainContent.classList.remove('sidebar-active');
            }

            console.log(`بارگذاری بخش: ${section}`);
        });
    });

    // مدیریت جستجو
    const searchInput = document.querySelector('.search-input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchValue = this.value.trim();
            console.log('جستجو برای:', searchValue);
        });
    }

    // مدیریت اعلان‌ها
    const notificationButtons = document.querySelectorAll('.action-icon-btn');
    notificationButtons.forEach(button => {
        button.addEventListener('click', function() {
            const type = this.querySelector('i').classList.contains('bi-bell') ? 'notification' : 'message';
            alert(`نمایش ${type === 'notification' ? 'اعلان‌ها' : 'پیام‌ها'}`);
        });
    });

    // مدیریت دراپ‌داون ادمین
    const adminDropdown = document.querySelector('.admin-dropdown');
    if (adminDropdown) {
        adminDropdown.addEventListener('click', function() {
            alert('نمایش گزینه‌های پروفایل ادمین');
        });
    }

    // مدیریت بازگشت به عقب/جلو در مرورگر
    window.addEventListener('popstate', function(event) {
        if (event.state && event.state.section) {
            const section = event.state.section;
            const link = document.querySelector(`.nav-link[data-section="${section}"]`);
            if (link) {
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
                pageTitle.textContent = link.textContent.trim();
                breadcrumbActive.textContent = link.textContent.trim();
                console.log(`بازگشت به بخش: ${section}`);
            }
        }
    });
});