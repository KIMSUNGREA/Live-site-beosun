<?php include "../_head.php"; ?>
	<section class="sub_top sub_community"></section>
	<div id="sub_wrap">
		<section class="sub_ind_cont">
			<div class="tit">
				<h1 class="text_ct">방문정보안내</h1>
			</div>
			<?php if ($_GET['cf'] != "view") {?>
            <div class="visit_top">
                <figure>
                    <img src="../images/visit1.png" alt="">
                </figure>
                <figcaption>
                    <h4>
                        사뿐사뿐빠져드는<br>
                        4色 매력 청송, 영양, 봉화, 영월
                    </h4>
                    <p>
                        외씨버선길 가이드북은 13개코스의 지도,  교통정보, 식당과 숙박정보<br class="pc">
                        그리고 청송, 영양, 봉화, 영월의 관광명소를<br class="pc">  
                        담고 있어  외씨버선길 트래킹에 필요한 정보를 한눈에 볼 수 있습니다.
                    </p>
                    <p>
                        무분별한 가이드북 및 지도 신청을 방지하고<br class="pc"> 
                        외씨버선길 탐방객에게 보다 유용한 정보를 제공하기 위해 유료로 판매하고 있으니<br class="pc"> 
                        구매를 희망하시는 분은 아래 계좌로 입금 후 배송주소지와 입금자명을  남겨주시면<br class="pc"> 
                        우편으로 발송해 드립니다.  감사합니다. 
                    </p>
                    <div class="bank">
                        <h5>입금정보</h5>
                        <p>농협 301-0215-3406-91</p>
                        <p>예금주명: (사)경북북부연구원</p>
                        <span>※게시판에 글 작성시 입금자의 성함을 꼭 기재해 주시기 바랍니다.</span>
                        <span>※오 기재로 인한 책임은 신청자에게 있습니다.</span>
                    </div>
                </figcaption>
            </div>
            <div class="visit_bt">
                <img src="../images/visit2.png" alt="">
                <img src="../images/visit3.png" alt="">
            </div>
			<?php } ?>
			<?php rt_app("rtboard","display",array("visit"));?>
		</section>
	</div>
<?php include "../_tail.php"; ?>