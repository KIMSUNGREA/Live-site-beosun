<?php /* Template_ 2.2.8 2023/07/19 01:43:04 /www_root/app/rtmember/template/rtmember.step1.html 000002295 */ ?>
<style>
.rt-rwd-login-box input[type="text"],
.rt-rwd-login-box input[type="password"]{width:100%;height:55px;line-height:55px;padding:0 5px;font-size:13px !important;background-color:#f9f9f9;border:1px solid #d8d8d8;font-family: inherit; font-size: inherit; width:100% !important;}
.rt-rwd-login-box .rt-rwd-login-send{display:block;text-align:center;height:55px;line-height:55px;font-size:20px;color:#1d4ca1;background:#fff; border:2px solid #1d4ca1; transition: .25s; width:100% !important; float: right; margin-right: 0;}

.sns-wrap .rt-rwd-login-n{display:block;text-align:center;height:55px;line-height:55px;font-size:20px;color:#fff; background-color:#25c800; transition: .25s; width:100% !important; float: right; margin-right: 0; background-image:url('../img/logo_n1.png'); background-size: auto;
    background-position:5%;  background-repeat: no-repeat;}
.sns-wrap .rt-rwd-login-n:hover{  background-color:#333; color:#fff;}

.sns-wrap .rt-rwd-login-k{display:block;text-align:center;height:55px;line-height:55px;font-size:20px;color:#3b1e1f;background:#fee500; transition: .25s; width:100% !important; float: right; margin-right: 0;  background-image:url('../img/logo_k1.png'); background-size: auto;
    background-position:5%;  background-repeat: no-repeat;}
.sns-wrap .rt-rwd-login-k:hover{  background-color:#333; color:#fff;}

@media all and (max-width:768px){
.rt-content {margin-bottom:0;padding: 0 10px 0 10px;}
}
</style>   
<!-- 반응형 회원 시작 -->
   <div class="rt-content">
	 <div class="rt-rwd-login-box">
			<a href="?cf=step2" class="rt-rwd-login-send" id="btn-join">ID/PW로 회원가입</a>
	</div>
    <div class="sns-wrap">
          <a href="<?php echo $TPL_VAR["naverUrl"]?>" class="rt-rwd-login-n mt5" >네이버 계정으로 로그인</a>
          <a href="<?php echo $TPL_VAR["kakaoUrl"]?>" class="rt-rwd-login-k mt15">카카오 계정으로 로그인</a>
    </div> 
<!-- 반응형 회원 끝 -->

        
    
<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.join.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css" />