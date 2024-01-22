<?php
include "../_head.php";

$_r = $dbo->fetch("SELECT * FROM RT_REVIEW WHERE seq='".$env->_get['seq']."'");
?>
<section class="sub_top sub_community"></section>
<div id="sub_wrap">
	<section class="sub_ind_cont">
		<div class="tit">
			<h1 class="text_ct">완주후기</h1>
		</div>

		<!-- 반응형 게시판 시작 -->
		<div class="rt-rwd-notice-wrap">
			<!-- 뷰 시작 -->
			<div class="rt-rwd-view-wrap">
				<div class="rt-rwd-view-head">
					<h1 class="rt-rwd-view-head-title"><!--{? 분류사용 == 'y' && 포스트.분류 }-->[{포스트.분류}] <!--{/}-->{포스트.제목}</h1>
					<div class="rt-rwd-view-data-wrap">
						<span class="rt-rwd-view-data">작성자 : {포스트.작성자}</span>
						<span class="rt-rwd-view-data">작성일 : {포스트.작성일}</span>
						<span class="rt-rwd-view-data">조회수 : {포스트.조회수}</span>
					</div>
				</div>
				<div class="rt-rwd-view-body">
					<!--{? 포스트.대표이미지사용여부 == 'y' }-->
					<img src="{포스트.목록이미지경로}" alt="">
					<!--{/}-->
					<!--{? 첨부이미지사용여부 == 'y' }-->
						<p>
						<!--{@ 첨부파일}-->
							<!--{? 첨부파일.이미지여부 }-->
							<img src="{첨부파일.파일경로}" alt="" >
							<!--{/}-->
						<!--{/}-->
						</p>
					<!--{/}-->
					<p>{포스트.내용}</p>
				</div>
				<div class="rt-rwd-view-footer">
					<!--{@ 추가필드}-->
					<div class="rt-rwd-view-pager">
						<div class="rt-rwd-view-pager-title"><h1>{추가필드.필드명}</h1></div>
						<div class="rt-rwd-view-pager-list"><a>{추가필드.데이터}</a></div>
					</div>
					<!--{/}-->
					<!--{@ 첨부파일}-->
					<div class="rt-rwd-view-pager">
						<div class="rt-rwd-view-pager-title"><h1>첨부파일<img src="{path_theme}/user/files/ico_file.png" alt="" /></h1></div>
						<div class="rt-rwd-view-pager-list"><a href="{첨부파일.다운로드링크}" target="rt_ifrm">{첨부파일.파일명}</a>&nbsp;&nbsp;<a href="{첨부파일.다운로드링크}" target="rt_ifrm"><img src="{path_theme}/user/files/download.png" alt=""  /></a> <span class="count">{첨부파일.다운로드수}회</span></div>
					</div>
					<!--{/}-->

					<!--{? 포스트.공지여부 == 'n' }-->
					<div class="rt-rwd-view-pager">
						<div class="rt-rwd-view-pager-title"><h1>다음글</h1></div>
						<div class="rt-rwd-view-pager-list"><a href="{포스트.다음글링크}">{포스트.다음글제목}</a></div>
					</div>
					<div class="rt-rwd-view-pager">
						<div class="rt-rwd-view-pager-title"><h1>이전글</h1></div>
						<div class="rt-rwd-view-pager-list"><a href="{포스트.이전글링크}">{포스트.이전글제목}</a></div>
					</div>
					<!--{/}-->
				</div>
			</div>
			<!-- 뷰 끝 -->
			<!-- 버튼 시작 -->
			<div class="rt-button rt-button-tar">
				<a href="#;" style="cursor: pointer;" id="btn-list">목록</a>
			</div>
			<!-- 버튼 끝 -->


			<!--{? 댓글사용 == 'y' }-->
				<!-- 댓글 시작 -->
				<div class="rt-rwd-reply-wrap">
					<!-- 댓글 폼 시작 -->
					<div class="rt-rwd-reply-form-wrap clearfix">
					<form name="cmt_insert_form" method="post" action="{path_theme}/user/update.php"target="rt_ifrm">
						<input type="hidden" name="mode" value="cmt_insert">
						<input type="hidden" name="post_seq" value="{포스트.고유키}">
						<input type="hidden" name="id" value="{회원아이디}">
						<input type="hidden" name="bcode" value="{게시판코드}">
						<input type="hidden" name="php_self" value="{php_self}">
						<div class="rt-rwd-reply-form-hd clearfix">
							<div class="rt-rwd-reply-form-user rt-rwd-reply-form-user-left"><span class="rt-rwd-reply-form-tit">이름 : </span><input type="text" name="name" class="rt-rwd-reply-user required" placeholder="이름을 입력하세요." msg="이름을 입력해 주세요" value="{회원이름}"/></div>
							<!--{? !로그인여부}-->
							<div class="rt-rwd-reply-form-user rt-rwd-reply-form-user-right"><span class="rt-rwd-reply-form-tit">패스워드 : </span><input type="password" name="pwd" id="pwd" class="rt-rwd-reply-user required" placeholder="비밀번호를 입력하세요." msg="비밀번호를 입력해 주세요" /></div>
							<!--{/}-->
						</div>
						<div class="rt-rwd-reply-form-con">
							<textarea name="content" class="rt-rwd-reply-form required" placeholder="댓글을 입력하세요." msg="댓글 내용을 입력해 주세요"></textarea>
							<!--{? 댓글이용권한}-->
							<a href="#;" class="rt-rwd-reply-send" id="btn-cmt-submit"><span>등록</span></a>
							<!--{:}-->
							<a href="#;" class="rt-rwd-reply-send" onclick="alert('이용권한이 없습니다.')"><span>등록</span></a>
							<!--{/}-->
						</div>
					</form>
					</div>
					<!-- 댓글 폼 끝 -->
					<!-- 댓글 리스트 시작 -->
					<div class="rt-rwd-reply-list-wrap">
						<!--{@ 댓글}-->
						<!--{? 댓글.re_level == 0 }-->
						<div class="rt-rwd-reply-list-con">
						<!--{/}-->
							<!--{? 댓글.re_level != 0 }-->
							<div class="rt-rwd-reply-comment-wrap">
								<div class="rt-rwd-reply-comment-con">
							<!--{/}-->
									<p class="rt-rwd-reply-id clearfix">{댓글.작성자}
									<!--{? 로그인여부 && 회원아이디 == 댓글.아이디}-->
									<a href="#;" class="rt-rwd-reply-delete" onclick="cmt_my_delete({댓글.고유키})">삭제</a>
									<!--{:}-->
									<a href="#;" class="rt-rwd-reply-delete">삭제</a>
									<!--{/}-->
									</p>
									<div class="rt-rwd-reply-delete-password-wrap clearfix">
										<div class="rt-rwd-reply-delete-password-form">
											<input type="password" class="rt-rwd-reply-delete-password" placeholder="비밀번호를 입력해주세요." name="del_pwd_{댓글.고유키}" id="del_pwd_{댓글.고유키}" msg="패스워드을 입력해 주세요"/>
											<a href="javascript:cmt_delete({댓글.고유키})" class="rt-rwd-reply-delete-password-send">입력</a>
										</div>
										<a href="#;" class="rt-rwd-reply-delete-password-cancle">취소</a>
									</div>
									<p class="rt-rwd-reply-date">{댓글.작성일}</p>
									<p class="rt-rwd-reply-substance">{댓글.내용}</p>
									<!--{? 댓글.re_level == 0 }-->
									<a href="#;" class="rt-rwd-reply-comment">답글입력</a>
									<!--{/}-->
							<!--{? 댓글.re_level != 0 }-->
								</div>
							</div>
							<!--{/}-->
							<!-- 답글 입력 시작 -->
							<div class="rt-rwd-reply-form-wrap rt-rwd-reply-toggle clearfix">
								<div class="rt-rwd-reply-form-hd clearfix">
									<div class="rt-rwd-reply-form-user rt-rwd-reply-form-user-left"><span class="rt-rwd-reply-form-tit">이름 : </span><input type="text" class="rt-rwd-reply-user" placeholder="이름을 입력하세요." name="name_{댓글.고유키}" id="name_{댓글.고유키}" msg="이름을 입력해 주세요" value="{회원이름}" /></div>
									<!--{? !로그인여부}-->
									<div class="rt-rwd-reply-form-user rt-rwd-reply-form-user-right"><span class="rt-rwd-reply-form-tit">패스워드 : </span><input type="password" class="rt-rwd-reply-user" placeholder="비밀번호를 입력하세요." name="name" id="pwd_{댓글.고유키}" msg="패스워드을 입력해 주세요"/></div>
									<!--{/}-->
								</div>
								<div class="rt-rwd-reply-form-con">
									<textarea class="rt-rwd-reply-form" placeholder="댓글을 입력하세요." name="content_{댓글.고유키}" id="content_{댓글.고유키}"></textarea>
									<!--{? 댓글이용권한}-->
									<a href="#;" class="rt-rwd-reply-send" onclick="cmt_submit({댓글.고유키});"><span>등록</span></a>
									<!--{:}-->
									<a href="#;" class="rt-rwd-reply-send" onclick="alert('이용권한이 없습니다.');"><span>등록</span></a>
									<!--{/}-->
								</div>
							</div>
							<!-- 답글 입력 끝 -->
						<!--{? 댓글.re_level == 0 }-->
						</div>
						<!--{/}-->
						<!--{/}-->
					</div>
					<!-- 댓글 리스트 끝 -->
				</div>
				<!-- 댓글 끝 -->
			<!--{/}-->
		</div>
		<!-- 반응형 게시판 끝 -->
	</section>
</div>

<form name="cmt_use_form" method="post" action="{path_theme}/user/update.php" target="rt_ifrm">
	<input type="hidden" name="mode" value="cmt_reply" />
	<input type="hidden" name="seq" value="" />
	<input type="hidden" name="id" value="{회원아이디}" />
	<input type="hidden" name="name" value="{회원이름}" />
	<input type="hidden" name="pwd" value="" />
	<input type="hidden" name="bcode" value="{게시판코드}">
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="php_self" value="{php_self}">
</form>

<form name="data_form">
	<input type="hidden" name="pg" value="{pg}">
	<input type="hidden" name="pcd" value="{페이지코드}">
	<input type="hidden" name="screen" value="{이동화면}">
	<input type="hidden" name="ct" value="{검색분류}">
	<input type="hidden" name="search" value="{search}">
	<input type="hidden" name="searchstring" value="{searchstring}">
</form>

<!-- 반응형 CSS //-->
<link href="/app/rtboard/theme/info/user/css/rtboard.info.responsive.css" type="text/css" rel="stylesheet"/>

<script src="/app/rtboard/theme/info/user/js/rtboard.theme.info.user.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>
<?php include "../_tail.php"; ?>