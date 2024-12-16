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
        height: 180px;
        background-color: white;
        color: #0072C6;
        transition: transform 0.5s ease, box-shadow 0.5s ease, background-color 0.5s ease;
    }
    .team-content-bs:hover {
        transform: scale(1.05); 
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
        background-color: #5ce2ff; 
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
        padding-top: 40px;
        padding-bottom: 20px;
    }
    @media (max-width: 768px) {
        .team-content-bs{
            font-size: 8px;
            height: 120px;
        }
        #text-dn {
            font-size: 1.7rem;
        }
        .team-content-bs {
            font-size: 1rem;
            height: 170px;
        }
        
    }
    @media (max-width: 576px) {
        .team-content-bs{
            font-size: 8px;
            height: 100px;
        }
        #text-dn {
            font-size: 1.2rem;
        }
        .team-content-bs {
            font-size: 0.6rem;
            padding: 0;
            height: 130px;
        }
        .team-title{
            font-size: 0.8rem;
        }
    }
    @media (max-width: 400px) {
        .team-content-bs {
            font-size: 0.5rem;
            padding: 0;
            height: 130px;
        }
    }
</style>
<div id="bacsi" class="team text-center">
    <div class="container">
        <div class="section-title">
            <p id="text-dn">ĐỘI NGŨ BÁC SĨ CHUYÊN SÂU</p>
        </div>
        <div class="owl-carousel owl-bs">
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top">
                        <img src="../../asset/images/bs1.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Khổng Văn Quân
                        <p class="team-description-bs mb-0"></h5>Chuyên khoa RHM <b>Đại học Y dược TP. Hồ Chí Minh</b> 

                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top">
                        <img src="../../asset/images/bs2.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Nguyễn Chí Tình
                        <p class="team-description-bs mb-0"></h5>Chuyên khoa RHM <b>Đại học Y dược TP. Hồ Chí Minh</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top">
                        <img src="../../asset/images/bs3.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Lê Châu Hưng Thịnh
                        <p class="team-description-bs mb-0"></h5>Chuyên khoa RHM <b>Đại học Y Hà Nội</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top">
                        <img src="../../asset/images/bs4.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Hoàng Thị Thảo Ngân
                        <p class="team-description-bs mb-0"></h5>Chuyên khoa RHM <b>Đại học Y dược Huế</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top">
                        <img src="../../asset/images/bs5.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Bùi Thị Giang
                        <p class="team-description-bs mb-0"></h5>Chuyên khoa RHM <b>Đại học Y dược TP. Hồ Chí Minh</b> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-bs">
                <div class="team-item rounded overflow-hidden">
                    <div class="team-img rounded-top">
                        <img src="../../asset/images/bs6.jpg" class="img-fluid rounded-circle w-100" alt="">
                    </div>
                    <div class="team-content-bs text-center border border-primary rounded p-4 mt-2 mt-lg-3">
                        <h5 class="team-title">Bác sĩ: Văn Thanh Nga
                        <p class="team-description-bs mb-0"></h5>Chuyên khoa RHM Đại học Chuyên khoa RHM <b>Đại học Vitebsk State Order of Peoples' Friendship Medical</b>
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