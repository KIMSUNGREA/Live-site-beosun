<?php
include "../_head.php";

$user = $cls_rtm->get_member_info();
if (!$user['user_id']) {
	$movepage = urlencode("/review/");
	rt_js_move("", "self", "href", "/mb/login.php?prepage=".$movepage);
	exit;
}
?>
<section class="sub_top sub_community"></section>
<div id="sub_wrap">
	<section class="sub_ind_cont">
		<div class="tit">
			<h1 class="text_ct">완주후기</h1>
			<ul>
				<li><a href="/review/">완주후기</a></li>
				<li class="on"><a href="/review/form.php">완주후기 쓰기</a></li>
			</ul>
		</div>
		<div class="common_box show2 on">


		<!-- 반응형 게시판 시작 -->
		<div class="rt-rwd-notice-wrap">
			<!-- 폼 시작 -->
			<div class="rt-rwd-form-wrap">
				<!-- 폼 필드 시작 -->
				<form name="app_form_app" method="post" action="/review/update.php" target="rt_ifrm_appform" enctype="multipart/form-data">
				<input type="hidden" name="mode" value="insert">
				<div class="rt-rwd-form-area new_bord">


					<div class="rt-rwd-form-con">
						<div class="rt-rwd-form-title">
							<h1><span class="rt-rwd-star">*</span> 이름</h1>
						</div>
						<div class="rt-rwd-form-box-wrap clearfix">
							<div class="rt-rwd-form-box rt-full-box">
								<input type="text" name="name" value="<?php echo $user['user_nm'];?>" class="required" msg="이름을 정확히 입력해 주세요" style="width:200px;"/>
							</div>
						</div>
					</div>

					<div class="rt-rwd-form-con">
						<div class="rt-rwd-form-title">
							<h1><span class="rt-rwd-star">*</span> 제목</h1>
						</div>
						<div class="rt-rwd-form-box-wrap clearfix">
							<div class="rt-rwd-form-box rt-full-box">
								<input type="text" name="title" value="" class="required" msg="제목을 정확히 입력해 주세요" />
							</div>
						</div>
					</div>

					<div class="rt-rwd-form-con">
						<div class="rt-rwd-form-title">
							<h1><span class="rt-rwd-star">*</span> 내용</h1>
						</div>
						<div class="rt-rwd-form-box-wrap clearfix">
							<div class="rt-rwd-form-box rt-full-box">
								<textarea name="cont_tx" id="cont_tx" style="display:none;"></textarea>
							</div>
						</div>
					</div>

					<div class="rt-rwd-form-con">
						<div class="rt-rwd-form-title">
							<h1>대표(목록)이미지</h1>
						</div>
						<div class="rt-rwd-form-box-wrap clearfix">
							<div class="rt-rwd-form-box rt-full-box">
								<p><input type="file" name="file1" /></p>
							</div>
						</div>
					</div>
				</div>
				</form>
				<!-- 폼 필드 끝 -->

			<!-- 폼 끝 -->

			<div class="rt-button rt-button-tac">
				<a href="javascript:location.href='/review/'" style="cursor: pointer;">목록으로</a>
				<a href="javascript:formsubmit()" style="cursor: pointer;">등록하기</a>
			</div>
		</div>
		<!-- 반응형 게시판 끝 -->

	</section>
</div>

<script>
function formsubmit() {

	var f = document.app_form_app;
	if (f.name.value == "") {
		alert("이름을 입력해 주세요.");
		f.name.focus();
	} else if (f.title.value == "") {
		alert("제목을 입력해 주세요.");
		f.title.focus();
	} else if (f.file1.value == "") {
		alert("대표 이미지를 입력해 주세요.");
		f.file1.focus();
	} else {
		se2_editor_contents("cont_tx");
		f.submit();
	}

}
</script>

<script src="<?php echo RTW_PLUGIN;?>/SE2.8.2.O12056/js/HuskyEZCreator.js" type="text/javascript"></script>
<script src="<?php echo RTW_ASSETS;?>/js/se2.editor.js" type="text/javascript"></script>
<script type="text/javascript">
var oEditors = [];
nhn.husky.EZCreator.createInIFrame({
	oAppRef: oEditors,
	elPlaceHolder: "cont_tx",
	sSkinURI: "<?php echo RTW_PLUGIN;?>/SE2.8.2.O12056/SmartEditor2Skin.html",
	htParams : {
		bUseToolbar : true,			//툴바
		bUseVerticalResizer : true,	//입력창 크기 조절바
		bUseModeChanger : true		//모드 탭
	},
	fOnAppLoad : function(){
		oEditors.getById["cont_tx"].setDefaultFont("나눔고딕", "10");
	}
});
</script>

<link href="/app/rtboard/theme/qna/user/css/rtboard.qna.responsive.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
;(function($) {
	$(function() {
		$('.rt-rwd-qna-subject a').click(function(){
			var href_chk = $(this).attr('href');
			if (href_chk == "#;" || href_chk == "#"){
				$(this).parent().parent().siblings('.rt-rwd-qna-con').children('.rt-rwd-qna-password-form').slideUp();
				$(this).parent().next('.rt-rwd-qna-password-form').slideToggle();
			}
		})

		$('.faq_toggle .toggle-trigger').click(function(){
			$(this).next().slideToggle();
			$(this).parent().siblings().children().last().slideUp();
		})

		$('.rt-rwd-reply-comment,.rt-reply-comment').click(function(){
			$(this).parent().siblings().children('.rt-rwd-reply-toggle,rt-reply-toggle').slideUp();
			$(this).next().slideToggle();
		});
		$('.rt-rwd-reply-delete').click(function(){
			var showCon = $(this).parent().next('.rt-rwd-reply-delete-password-wrap,.rt-reply-delete-password-wrap').css('display');
			if(showCon == 'block'){
				$('.rt-rwd-reply-delete-password-wrap.rt-reply-delete-password-wrap').slideUp();
			}else {
				$('.rt-rwd-reply-delete-password-wrap,.rt-reply-delete-password-wrap').slideUp();
				$(this).parent().next('.rt-rwd-reply-delete-password-wrap,.rt-reply-delete-password-wrap').slideDown();
			}
		});
		$('.rt-rwd-reply-delete-password-cancle,.rt-reply-delete-password-cancle').click(function(){
			$('.rt-rwd-reply-delete-password-wrap,.rt-reply-delete-password-wrap').slideUp();
		});
		$('.rt-rwd-list-con .rt-rwd-list-subject').each(function(){
			var img_chk = $(this).find('.rt-rwd-thumb').css('display');
			var img_h = $(this).find('.rt-rwd-thumb').css('height');
			if (img_chk == "inline"){
				$(this).css({
					'height':img_h,
					'overflow':'hidden'
				});
				$(this).find('a').css({
					'display':'inline-block',
					'line-height':img_h
				});
			}
		});
	});
})(jQuery);
</script>

<iframe name="rt_ifrm_appform" id="rt_ifrm_appform" style="display:none;"></iframe> 
<?php include "../_tail.php"; ?>