<style>
    .info-banner {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .info-item {
        margin-bottom: 20px;
    }

    .info-icon i {
        max-width: 60px;
        height: auto;
        color: red;
        font-size: 2rem;
    }

    .info-text {
        margin-top: 10px;
        font-size: 14px;
        font-weight: bold;
    }

    h3 {
        margin: 0;
    }

    @media (max-width: 1200px) {
        .info-item {
            margin-bottom: 10px;
        }

        .info-icon i {
            font-size: 1.5rem;
        }

        .info-text {
            font-size: 12px;
        }
    }

    @media (max-width: 992px) {
        .info-item {
            margin-bottom: 10px;
        }

        .info-icon i {
            font-size: 1.2rem;
        }

        .info-text {
            font-size: 11px;
        }
    }

    @media (max-width: 768px) {
        .info-item {
            margin-bottom: 10px;
        }

        .info-icon i {
            font-size: 1rem;
        }

        .info-text {
            font-size: 7px;
        }
    }

    @media (max-width: 576px) {
        .info-item {
            margin-bottom: 5px;
        }

        .info-icon i {
            font-size: 0.8rem;
        }

        .info-text {
            font-size: 5px;
        }
    }
</style>
<div style="background-color: #4dacfe;" class="col-12">
    <div class="container">
        <div class="info-banner row justify-content-between">
            <div class="info-item col-2">
                <div class="info-icon"> <i class="fas fa-users icon"></i> </div>
                <div class="info-text">
                    <span class="counter" data-target="8" data-speed="50">0</span>+ <br> NĂM KINH NGHIỆM
                </div>
            </div>
            <div class="info-item col-2">
                <div class="info-icon"> <i class="fas fa-user icon"></i> </div>
                <div class="info-text">
                    <span class="counter" data-target="30000" data-speed="40">0</span>+ <br> KHÁCH HÀNG TRONG VÀ
                    NGOÀI NƯỚC
                </div>
            </div>
            <div class="info-item col-2">
                <div class="info-icon"> <i class="fa-solid fa-user-doctor"></i> </div>
                <div class="info-text">
                    <span class="counter" data-target="100" data-speed="60">0</span>% <br> BÁC SĨ RĂNG HÀM MẶT CHÍNH
                    QUY
                </div>
            </div>
            <div class="info-item col-2">
                <div class="info-icon"> <i class="fas fa-building icon"></i> </div>
                <div class="info-text">
                    <span class="counter" data-target="100" data-speed="60">0</span>% <br> TRANG THIẾT BỊ VÀ DỊCH VỤ
                    TIÊU CHUẨN QUỐC TẾ
                </div>
            </div>
            <div class="info-item col-2">
                <div class="info-icon"> <i class="fa-solid fa-tooth"></i></div>
                <div class="info-text">
                    <span class="counter" data-target="100" data-speed="60">0</span>% <br> NGUYÊN VẬT LIỆU, SẢN PHẨM
                    CAO CẤP
                </div>
            </div>
            <div class="info-item col-2">
                <div class="info-icon"> <i class="fas fa-smile icon" title="Hài lòng"></i> </div>
                <div class="info-text">
                    <span class="counter" data-target="98" data-speed="60">0</span>% <br> MỨC ĐỘ HÀI LÒNG CỦA KHÁCH
                    HÀNG
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const speed = +counter.getAttribute('data-speed');
                const inc = target / speed;
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 50);
                }
                else {
                    counter.innerText = target;
                }
            };
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        updateCount();
                        observer.unobserve(entry.target);
                    }
                });
            });
            observer.observe(counter);
        });
    }); 
</script>