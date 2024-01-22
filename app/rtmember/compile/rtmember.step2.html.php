<?php /* Template_ 2.2.8 2023/07/19 00:57:26 /www_root/app/rtmember/template/rtmember.step2.html 000008478 */ 
$TPL_메일리스트_1=empty($TPL_VAR["메일리스트"])||!is_array($TPL_VAR["메일리스트"])?0:count($TPL_VAR["메일리스트"]);?>
<!-- 반응형 회원 시작 -->
<div class="rt-rwd-member-wrap">
	<!-- 폼 시작 -->
	<div class="rt-rwd-join-form-wrap">
		<!-- 폼 필드 시작 -->
		<form name="join_form" action="<?php echo $TPL_VAR["path_user"]?>/update.php" method="post" target="rt_ifrm">
			<input type="hidden" name="mode" value="insert" />
			<input type="hidden" name="path_user" value="<?php echo $TPL_VAR["path_user"]?>" />
			<input type="hidden" name="php_self" value="<?php echo $TPL_VAR["php_self"]?>" />
			<input type="hidden" name="id_check" value="y" />
			<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
			<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>">
			<input type="hidden" id="join_check" value="n" />
			<input type="hidden" name="auth_sms_en" value="<?php echo $TPL_VAR["SMS인증"]?>" />
			<input type="hidden" name="is_sms_auth" value="n" />
			<input type="hidden" name="sms_auth_num" value="" />
			<h1 class="rt-rwd-join-form-agree-title rt-rwd-join-form-agree-title-bdn clearfix"><span class="rt-rwd-join-flr"><span class="rt-rwd-star">* </span> 필수입력사항</h1>
			<div class="rt-rwd-join-form-area">
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>이름<span class="rt-rwd-star">* </span></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="text" class="required" name="user_nm" msg="이름을 입력해 주세요" />
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>아이디 (이메일)<span class="rt-rwd-star">* </span></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-50-box">
							<input type="text"  class="required" name="email_id" id="email_id" msg="이메일을 정확히 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box rt-4-box">
							<p class="rt-join-form-tac">@</p>
						</div>
						<div class="rt-rwd-join-form-box rt-50-box">
							<input type="text" class="required" id="email_domain" name="email_domain" msg="이메일을 정확히 입력해 주세요" />
						</div>
						<!--div class="rt-rwd-join-form-box rt-32-box">
							<select onchange="$('#email_domain').val($(this).val());">
								<option value="직접입력">직접입력</option>
<?php if($TPL_메일리스트_1){foreach($TPL_VAR["메일리스트"] as $TPL_V1){?>
								<option value="<?php echo $TPL_V1["도메인"]?>"><?php echo $TPL_V1["도메인"]?></option>
<?php }}?>
							</select>
						</div-->
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>비밀번호<span class="rt-rwd-star">* </span></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="password"class="required" name="user_pw" msg="비밀번호를 입력해 주세요" />
						</div>
						<div class="rt-rwd-join-form-box">
							<p>(영문과 숫자로 필수조합, 6자~16자) </p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>비밀번호 확인<span class="rt-rwd-star">* </span></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="password" class="required" name="user_pw_re" msg="비밀번호를 다시 한번 입력해 주세요" />
						</div>
					</div>
				</div>
				
				<!--div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1><span class="rt-rwd-star">* </span>메일링 동의</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-full-box">
							<p>
								<label><input type="radio" value="y" name="email_en" checked="checked"/><span>예</span></label>
								<label><input type="radio" value="n" name="email_en"/><span>아니오</span></label>
							</p>
						</div>
					</div>
				</div-->
				<!-- <div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>휴대폰<span class="rt-rwd-star">* </span></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-rwd-768-full-box">
							<input type="text" class="required" name="user_phone" msg="휴대폰을 입력해 주세요" />
						</div>
                        <div class="rt-rwd-join-form-box">
							<p>( ‘-’없이 숫자만 입력하세요)</p>
						</div>
					</div>
				</div> -->
				
				
				<div class="rt-rwd-join-form-con">
					<div class="rt-rwd-join-form-title">
						<h1>보안문자</h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-full-box">
							<p><span class="rt-join-form-bold" id="capcha_str"></span><a href="#;" class="rt-join-form-reflash" onclick="rt_get_capcha('join')">새로고침</a></p>
						</div>
					</div>
				</div>
				<div class="rt-rwd-join-form-con rt-rwd-non-title">
					<div class="rt-rwd-join-form-title">
						<h1></h1>
					</div>
					<div class="rt-rwd-join-form-box-wrap clearfix">
						<div class="rt-rwd-join-form-box rt-310px-box rt-px-box">
							<input type="text" placeholder="※ 보안문자를 입력해 주세요." name="sec_code" msg="보안문자를 입력해 주세요" />
						</div>
					</div>
				</div>
			</div>
			<!-- 폼 필드 끝 -->
			
		</div>
		<!-- 폼 끝 -->
		
        <div class="qna">
	        <ul class="qna_list">
		        <li class="">
			      <div class="qna_con qna_con_q">
				      <p class="question wk"><label for="agr-all"><input type="checkbox" id="agr-all" /><span> 전체 동의</span></label></p>
			       </div>
			       <div class="qna_con wk qna_con_a" style="">
				    <p></p>
			       </div>
		       </li>
               
               <li>
			      <div class="qna_con qna_con_q">
				     <p class="question wk"><label for="agr1"><input type="checkbox" id="agr1" /><span> 이용약관 동의(필수)</span></label> <span class="view">전문보기</span></p>
			       </div>
			       <div class="qna_con wk qna_con_a" style="height:200px;overflow:scroll;">
				    <p style="padding:20px;font-size:14px;" ><?php echo $TPL_VAR["agreement1_txt"]?></p>
			      </div>
		       </li>
               <li>
			      <div class="qna_con qna_con_q">
				      <p class="question wk"><label for="agr2"><input type="checkbox" id="agr2" /><span> 개인정보처리방침 동의(필수)</span></label> <span class="view">전문보기</span></p>
			       </div>
			       <div class="qna_con wk qna_con_a" style="height:200px;overflow:scroll;">
				     <p style="padding:20px;font-size:14px;" ><?php echo $TPL_VAR["agreement2_txt"]?></p>
			       </div>
		       </li>
	      </ul>
     </div>
        
        <!-- 버튼 시작 -->
		<div class="rt-button rt-button-tac">
			<a href="#;" id="btn-form-submit">회원가입</a>
		</div>
		<!-- 버튼 끝 -->
        
	</div>
	<!-- 반응형 회원 끝 -->

<script src="<?php echo $TPL_VAR["path_assets"]?>/js/rtmember.join.js?ver=<?php echo $TPL_VAR["캐시버전"]?>" type="text/javascript"></script>

<script>
$('.qna_list .qna_con_q').on('click',function(){
	$('.qna_list .qna_con_q').parent().removeClass('active');
	if($(this).next().is(':visible')){
			$(this).next().slideUp();
	} else if($(this).next().is(':hidden')){
			$('.qna_list .qna_con_q').next().slideUp();
			$(this).parent().addClass('active');
			$(this).next().slideDown();
	}
});
</script>
<link rel="stylesheet" href="<?php echo $TPL_VAR["path_assets"]?>/css/rt_member.css?ver=<?php echo $TPL_VAR["캐시버전"]?>" />
<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>