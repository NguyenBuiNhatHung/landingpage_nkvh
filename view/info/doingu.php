<style>
    .item-bs {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
    }
    .team-content-bs {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 180px;
        background-color: white;
        color: #0072C6;
        transition: transform 0.5s ease, box-shadow 0.5s ease, background-color 0.5s ease;
    }
    .team-content-bs:hover {
        transform: scale(1.05); /* Tăng kích thước khi hover */
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2); /* Thêm bóng */
        background-color: #5ce2ff; /* Màu nền mới khi hover */
        color: white;
    }

    .team-description-bs {
        flex-grow: 1;
        display: flex;
        align-items: center;
        color: #0072C6;
    }
    .team-description-bs:hover {
        color: white;
    }
    #text-dn{
        color:white;
        font-size: 2rem;
        font-weight: 1000;
    }
    @media (max-width: 768px) {
        .team-content-bs{
            font-size: 8px;
            height: 120px;
        }
        #text-dn {
            font-size: 1.7rem; /* Kích thước chữ lớn hơn */
        }
        .team-content-bs {
            font-size: 1rem;
        }
        
    }
    @media (max-width: 576px) {
        .team-content-bs{
            font-size: 8px;
            height: 100px;
        }
        #text-dn {
            font-size: 1.2rem; /* Kích thước chữ lớn hơn */
        }
        .team-content-bs {
            font-size: 0.6rem;
            padding: 0;
        }
        .team-title{
            font-size: 0.8rem;
        }
    }
</style>
<div id="bacsi" class="team text-center mt-4 mt-lg-5">
    <div class="container">
        <div class="section-title">
            <p id="text-dn">ĐỘI NGŨ BÁC SĨ CHUYÊN SÂU</p>
        </div>
        <div class="owl-carousel owl-bs">
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top h-100">
                        <img src="../../asset/images/bs1.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Khổng Văn Quân</h5>
                        <p class="team-description-bs mb-0">Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh

                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top h-100">
                        <img src="../../asset/images/bs2.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Nguyễn Chí Tình</h5>
                        <p class="team-description-bs mb-0">Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top h-100">
                        <img src="../../asset/images/bs3.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Lê Châu Hưng Thịnh</h5>
                        <p class="team-description-bs mb-0">Chuyên khoa RHM Đại học Y dược TP. Hồ Chí Minh
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top h-100">
                        <img src="../../asset/images/bs4.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Hoàng Thị Thảo Ngân</h5>
                        <p class="team-description-bs mb-0">Chuyên khoa RHM Đại học Y dược Huế

                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top h-100">
                        <img src="../../asset/images/bs5.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Bùi Thị Giang</h5>
                        <p class="team-description-bs mb-0">Chuyên khoa RHM Đại học Y Hà Nội
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top h-100">
                        <img src="../../asset/images/bs6.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Văn Thanh Nga</h5>
                        <p class="team-description-bs mb-0">Chuyên khoa RHM Đại học Chuyên khoa RHM Đại học Vitebsk State Order of Peoples' Friendship Medical
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
            $(".owl-bs").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                smartSpeed: 1500,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
</script>