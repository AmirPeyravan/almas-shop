// بررسی وجود کانتینر اعلان در صفحه
document.addEventListener('DOMContentLoaded', function() {
    if (!document.getElementById('notification-container')) {
        const container = document.createElement('div');
        container.id = 'notification-container';
        container.className = 'notification-container';
        document.body.appendChild(container);
    }
});

/**
 * نمایش اعلان سفارشی
 * @param {string} type - نوع اعلان: 'success' یا 'error'
 * @param {string} title - عنوان اعلان
 * @param {string} message - متن پیام اعلان
 * @param {number} duration - مدت زمان نمایش به میلی‌ثانیه (پیش فرض: 5000)
 */
function showNotification(type, title, message, duration = 5000) {
    // ایجاد المنت اعلان
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;

    // آیکون مناسب برای نوع اعلان
    const icon = type === 'success' ? '✓' : '✕';

    // ساختار داخلی اعلان
    notification.innerHTML = `
        <div class="notification-icon">${icon}</div>
        <div class="notification-content">
            <div class="notification-title">${title}</div>
            <div class="notification-message">${message}</div>
        </div>
    `;

    // اضافه کردن اعلان به کانتینر
    const container = document.getElementById('notification-container');
    container.appendChild(notification);

    // نمایش اعلان با انیمیشن
    setTimeout(() => {
        notification.classList.add('show');
    }, 10);

    // حذف اعلان بعد از مدت زمان مشخص
    setTimeout(() => {
        notification.classList.remove('show');

        // حذف المنت از DOM بعد از اتمام انیمیشن
        setTimeout(() => {
            notification.remove();
        }, 500);
    }, duration);
}

// اضافه کردن تابع به عنوان یک متد گلوبال
window.showNotification = showNotification;
