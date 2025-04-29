
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.querySelector('.mobile-toggle');
        const mobileToggleMain = document.querySelector('.mobile-toggle-main');
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.main-content');
        const navLinks = document.querySelectorAll('.nav-link');
        const pageTitle = document.querySelector('.page-title');
        const breadcrumbActive = document.querySelector('.breadcrumb-item.active');

        // باز و بسته کردن سایدبار در موبایل
        mobileToggle.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('sidebar-active');
        });

        mobileToggleMain.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('sidebar-active');
        });

        // بستن سایدبار با کلیک خارج از آن
        document.addEventListener('click', function(event) {
            if (!sidebar.contains(event.target) && !mobileToggleMain.contains(event.target) && sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                mainContent.classList.remove('sidebar-active');
            }
        });

        // مدیریت کلیک روی لینک‌های منو و تغییر URL
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const section = this.getAttribute('data-section');
                const title = this.textContent.trim();

                // تغییر کلاس active
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');

                // تغییر URL بدون رفرش
                history.pushState({ section }, title, `#${section}`);

                // به‌روزرسانی عنوان صفحه و بردکرامب
                pageTitle.textContent = title;
                breadcrumbActive.textContent = title;

                // انیمیشن برای محتوای اصلی
                mainContent.style.opacity = '0';
                mainContent.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    mainContent.style.opacity = '1';
                    mainContent.style.transform = 'translateY(0)';
                }, 300);

                // بستن سایدبار در موبایل
                if (window.innerWidth <= 992) {
                    sidebar.classList.remove('active');
                    mainContent.classList.remove('sidebar-active');
                }

                // اینجا می‌توانید محتوای بخش مربوطه را بارگذاری کنید
                console.log(`بارگذاری بخش: ${section}`);
            });
        });

        // مدیریت دکمه‌های عملیات
        const actionButtons = document.querySelectorAll('.action-btn');
        actionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const action = this.classList.contains('view') ? 'view' :
                              this.classList.contains('edit') ? 'edit' :
                              this.classList.contains('delete') ? 'delete' : '';
                
                if (action === 'view') {
                    const modal = new bootstrap.Modal(document.getElementById('orderDetailsModal'));
                    const orderId = this.closest('tr').querySelector('td').textContent;
                    document.getElementById('modalOrderId').textContent = orderId;
                    modal.show();
                } else if (action === 'edit') {
                    alert('ویرایش سفارش');
                } else if (action === 'delete') {
                    if (confirm('آیا مطمئن هستید که می‌خواهید این سفارش را حذف کنید؟')) {
                        alert('سفارش حذف شد');
                    }
                }
            });
        });

        // مدیریت فرم افزودن سفارش جدید
        const newOrderForm = document.getElementById('newOrderForm');
        if (newOrderForm) {
            newOrderForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const productName = document.getElementById('productName').value;
                const productCategory = document.getElementById('productCategory').value;
                const productPrice = document.getElementById('productPrice').value;
                alert(`سفارش جدید اضافه شد: ${productName} (${productCategory}) با قیمت ${productPrice} تومان`);
                bootstrap.Modal.getInstance(document.getElementById('newOrderModal')).hide();
                this.reset();
            });
        }

        // مدیریت جستجو
        const searchInput = document.querySelector('.search-input');
        searchInput.addEventListener('input', function() {
            const searchValue = this.value.trim();
            console.log('جستجو برای:', searchValue);
        });

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
        adminDropdown.addEventListener('click', function() {
            alert('نمایش گزینه‌های پروفایل ادمین');
        });

        // مدیریت صفحه‌بندی
        const pageLinks = document.querySelectorAll('.page-link');
        pageLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                pageLinks.forEach(l => l.parentElement.classList.remove('active'));
                this.parentElement.classList.add('active');
                console.log('نمایش صفحه:', this.textContent);
            });
        });

        // مدیریت به‌روزرسانی وضعیت سفارش
        const updateStatusButton = document.querySelector('.btn-secondary-custom');
        if (updateStatusButton) {
            updateStatusButton.addEventListener('click', function() {
                alert('به‌روزرسانی وضعیت سفارش');
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