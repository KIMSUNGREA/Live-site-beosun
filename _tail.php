<footer>
    <div class="footer_wrap">
        <address>
            <img src="../images/main_logo.png" alt="외씨버선길 로고">
            <p>(사)경북북부연구원<br>
            주소 : 경상북도 영양군 영양읍 시장3길 11,1층<br>
            <a href="tel:054-683-9282">Tel : 054-683-9282~9283</a><br>
            <a href=“fax:054-683-9284”>Fax : 054-683-9284</a><br>
            <span>Copyright © 2023 외씨버선길 . All Rights Reserved.</span></p>
        </address>
        <div class="call">
            <dl>
                <dt>
                    <p>청송객주</span></p>
                    경북 청송군 청송읍 금월로 269
                </dt>
                <dd>
                    <a href="tel:054-872-0116">Tel 054-872-0116</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>영양객주</p>
                    경북 영양군 영양읍 시장3길 11,1층
                </dt>
                <dd>
                    <a href="tel:054-683-0031">Tel 054-683-0031</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>봉화객주</p>
                    경북 봉화군 물야면 문수로 1541
                </dt>
                <dd>
                    <a href="tel:054-672-0803">Tel 054-672-0803</a>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>영월객주</p>
                    강원특별자치도 영월군 김삿갓면 김삿갓로 216-22
                </dt>
                <dd>
                    <a href="tel:033-374-6830">Tel 033-374-6830</a>
                </dd>
            </dl>
        </div>
    </div>
</footer>

    <script>
        // 메인슬라이더
        var mainslider = new Swiper(".mySwiper", {
        speed: 5000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
	//spaceBetween: 15,
        loop: true,
        pagination: {
            el: ".swiper-pagination",

        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
        // 메인슬라이더 정지,play
        var sw = 0;
        $('.btn_pause').click(function(){
        if(sw==0){
            $('.btn_pause').addClass('on');
            mainslider.autoplay.stop();
            sw = 1;
        }else{
            $('.btn_pause').removeClass('on');
            mainslider.autoplay.start();
            sw = 0;
        }
        });

        // 메인 서브 슬라이더
        var swiper = new Swiper(".mySwiper2", {
        speed: 3000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
	loop: true,
        breakpoints: {
        // 화면의 넓이가 320px 이상일 때
        320: {
            bslidesPerView: 1,
            spaceBetween: 20
        },
        // 화면의 넓이가 640px 이상일 때
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        }
        }
        });

        // sub페이지 탭메뉴
        // $(".sub_ind_cont .tit ul li").click(function(){
            //$(".sub_ind_cont .tit ul li").removeClass();
            //$(this).addClass("on");
            // 버튼 클릭시 화면 on off
            // const show = $(this).index()+1;
            // $(".common_box").removeClass("on")
            // $(".common_box.show"+show).addClass("on");
        // });

        // sub페이지 길 갤러리
        var swiper = new Swiper(".mySwiper3", {
            navigation: {
            nextEl: ".swiper-button-prev",
            prevEl: ".swiper-button-next",
            },
	    spaceBetween: 15,
            speed: 3000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loop: true,
        });
    </script>
	

	<iframe name="rt_ifrm_dd" id="rt_ifrm_dd" style="display:none;"></iframe>
</body>
</html>