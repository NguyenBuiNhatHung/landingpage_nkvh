<style>
    .notification {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        bottom: 20px; /* Di chuyển xuống dưới */
        right: 20px; /* Di chuyển sang bên phải */
        width: 300px;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1001;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .notification.show {
        opacity: 1;
    }

    .notification-icon {
        margin-left: 10px;
        color: #39b828;
    }
</style>
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