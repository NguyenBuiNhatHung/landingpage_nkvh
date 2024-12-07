<div class="elementor-widget-container">
    <div id="notification" class="notification">
        <span id="notification-text"></span>
    </div>
    <script>
        const messages = ["Khách hàng Nguyễn Văn đăng ký tư vấn trồng răng Implant",
            "Khách hàng Jonathan Nguyễn đặt hẹn bọc răng sứ",
        ];

        function showNotification(message) {
            const notification = document.getElementById('notification');
            const notificationText = document.getElementById('notification-text');
            notificationText.textContent = message;
            notification.classList.add('show');
            setTimeout(() => {
                notification.classList.remove('show');
            }, 5000);
        }
        let currentIndex = 0;
        setInterval(() => {
            if (currentIndex < messages.length) {
                showNotification(messages[currentIndex]);
                currentIndex++;
            } else {
                currentIndex = 0;
            }
        }, 10000);
    </script>
</div>