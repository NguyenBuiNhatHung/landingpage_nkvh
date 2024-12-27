<style>
    .info-banner {
        background: white;
        border-radius: 8px;
        text-align: center;
        width: 100%;
        align-items: center;
        justify-items: center;
    }

    .info-item {
        margin-bottom: 20px;
    }

    .info-icon i {
        max-width: 60px;
        height: auto;
        color: #004c76;
        font-size: 2rem;
    }

    .info-text {
        margin-top: 10px;
        font-size: 16px;
        font-weight: bold;
    }

    h3 {
        margin: 0;
    }
    .kn{
        color: #004c76;
        font-size: 20px;
    }

    #kinhnghiem{
        padding-top: 40px;
        align-items: center;
    }
    #nk-kn{
        margin-top: 40px;
        width: 100%;
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
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        .info-item {
            margin-bottom: 5px;
        }

        .info-icon i {
            font-size: 1rem;
        }

        .info-text {
            font-size: 10px;
        }
    }
    .img-nhaclai{
        width: 100%;
        margin-top: 20px;
    }
</style>
<div id="nk-kn" class="bg-white">
    <div id="kinhnghiem" class="col-12 container">
        <div class="info-banner row">
            <div class="info-item col-4 col-lg-2 wow animate__animated animate__fadeInLeft">
                <div class="info-icon"> <i class="fas fa-users icon"></i> </div>
                <div class="info-text">
                    <span class="kn"><span class="counter" data-target="8" data-speed="50">0</span>+</span> <br> NĂM KINH NGHIỆM
                </div>
            </div>
            <div class="info-item col-4 col-lg-2 wow animate__animated animate__fadeInLeft">
                <div class="info-icon"> <i class="fas fa-user icon"></i> </div>
                <div class="info-text">
                    <span class="kn"><span class="counter" data-target="30000" data-speed="40">0</span>+</span> <br> KHÁCH HÀNG TRONG VÀ
                    NGOÀI NƯỚC
                </div>
            </div>
            <div class="info-item col-4 col-lg-2 wow animate__animated animate__fadeInLeft">
                <div class="info-icon"> <i class="fa-solid fa-user-doctor"></i> </div>
                <div class="info-text">
                    <span class="kn"><span class="counter" data-target="100" data-speed="60">0</span>%</span> <br> BÁC SĨ RĂNG HÀM MẶT CHÍNH
                    QUY
                </div>
            </div>
            <div class="info-item col-4 col-lg-2 wow animate__animated animate__fadeInRight">
                <div class="info-icon"> <i class="fas fa-building icon"></i> </div>
                <div class="info-text">
                    <span class="kn"><span class="counter" data-target="100" data-speed="60">0</span>%</span> <br> TRANG THIẾT BỊ VÀ DỊCH VỤ
                    TIÊU CHUẨN QUỐC TẾ
                </div>
            </div>
            <div class="info-item col-4 col-lg-2 wow animate__animated animate__fadeInRight">
                <div class="info-icon"> <i class="fa-solid fa-tooth"></i></div>
                <div class="info-text">
                    <span class="kn"><span class="counter" data-target="100" data-speed="60">0</span>%</span> <br> NGUYÊN VẬT LIỆU, SẢN PHẨM
                    CAO CẤP
                </div>
            </div>
            <div class="info-item col-4 col-lg-2 wow animate__animated animate__fadeInRight">
                <div class="info-icon"> <i class="fas fa-smile icon" title="Hài lòng"></i> </div>
                <div class="info-text">
                    <span class="kn"><span class="counter" data-target="98" data-speed="60">0</span>%</span> <br> MỨC ĐỘ HÀI LÒNG CỦA KHÁCH
                    HÀNG
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <img class="img-nhaclai wow animate__animated animate__fadeInUp" src="../../asset/images/nhaclai.png" alt="">
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