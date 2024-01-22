<?php /* Template_ 2.2.8 2023/11/13 18:01:29 /www_root/app/rtboard/template/qna.layout.reponsive.list.html 000008743 */ 
$TPL_글분류_1=empty($TPL_VAR["글분류"])||!is_array($TPL_VAR["글분류"])?0:count($TPL_VAR["글분류"]);
$TPL_공지글_1=empty($TPL_VAR["공지글"])||!is_array($TPL_VAR["공지글"])?0:count($TPL_VAR["공지글"]);
$TPL_리스트_1=empty($TPL_VAR["리스트"])||!is_array($TPL_VAR["리스트"])?0:count($TPL_VAR["리스트"]);?>
<!-- 반응형 게시판 시작 -->
<div class="rt-rwd-notice-wrap">
	<!-- 검색폼 시작 -->
	<div class="rt-rwd-search-wrap">
	<form name="search_form" method="get" action="<?php echo $TPL_VAR["php_self"]?>">
	<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
	<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>">
		<div class="rt-rwd-search-select-wrap">
<?php if($TPL_VAR["분류사용"]=='y'){?>
			<select class="rt-rwd-search-select" name="ct">
				<option value="">분류 선택</option>
<?php if($TPL_글분류_1){foreach($TPL_VAR["글분류"] as $TPL_V1){?>
				<option value="<?php echo $TPL_V1["분류명"]?>" <?php echo $TPL_V1["selected"]?>><?php echo $TPL_V1["분류명"]?></option>
<?php }}?>
			</select>
<?php }?>
		</div>
		<div class="rt-rwd-search-select-wrap">
			<select class="rt-rwd-search-select" name="search">
				<option value="subject">제목</option>
				<option value="content">내용</option>
				<option value="subjcont">제목+내용</option>
				<option value="name">작성자</option>
			</select>
		</div>
		<div class="rt-rwd-search-input-wrap">
			<input type="text" name="searchstring" class="rt-rwd-search-input" value="<?php echo $TPL_VAR["검색어"]?>"/>
		</div>
		<a href="javascript:document.search_form.submit();" class="rt-rwd-search-send">검색</a>
	</form>
	</div>
	<!-- 검색폼 끝 -->
	<!-- 게시판 리스트 시작 -->
	<div class="rt-rwd-qna-wrap">
		<div class="rt-rwd-list-con rt-rwd-list-con-head rt-rwd-list-norm-con clearfix">
			<div class="rt-rwd-list-num"><p>번호</p></div>
			<div class="rt-rwd-list-subject"><p>제목</p></div>
			<div class="rt-rwd-list-type-wrap clearfix">
				<div class="rt-rwd-list-type-con clearfix">
					<div class="rt-rwd-list-type rt-rwd-list-type-writer">
						<p>작성자</p>
					</div>
					<div class="rt-rwd-list-type rt-rwd-list-type-day">
						<p>등록일</p>
					</div>
					<div class="rt-rwd-list-type rt-rwd-list-type-date rt_w81">
						<p>답변상태</p>
					</div>
				</div>
			</div>
		</div>
<?php if($TPL_공지글_1){foreach($TPL_VAR["공지글"] as $TPL_V1){?>
		<div class="rt-rwd-list-con rt-rwd-list-con-body rt-rwd-list-sign-con clearfix">
			<div class="rt-rwd-list-num"><p>공지</p></div>
			<div class="rt-rwd-list-subject">
				<a href="<?php echo $TPL_V1["상세페이지링크"]?>">
<?php if($TPL_VAR["목록이미지사용"]=='y'){?>
					<img src="<?php echo $TPL_V1["목록이미지경로"]?>" style="width:50px;height:50px;" class="rt-rwd-thumb"/>
<?php }?>
<?php if($TPL_VAR["분류사용"]=='y'&&$TPL_V1["분류"]!=''){?>[<?php echo $TPL_V1["분류"]?>]&nbsp;<?php }?>
					<?php echo $TPL_V1["줄임제목"]?>

				</a>&nbsp;
<?php if($TPL_VAR["댓글사용"]=='y'&&$TPL_V1["댓글수"]> 0){?>[<?php echo $TPL_V1["댓글수"]?>]<?php }?>
				<?php echo $TPL_V1["첨부아이콘"]?><?php echo $TPL_V1["새글아이콘"]?>

			</div>
			<div class="rt-rwd-list-type-wrap clearfix">
				<div class="rt-rwd-list-type-con clearfix">
					<div class="rt-rwd-list-type rt-rwd-list-type-writer">
						<p><span class="rt-rwd-list-type-m">작성자 </span><?php echo $TPL_V1["작성자"]?></p>
					</div>
					<div class="rt-rwd-list-type">
						<p><span class="rt-rwd-list-type-m">등록일 </span><?php echo $TPL_V1["작성일"]?></p>
					</div>
					<div class="rt-rwd-qna-type">
						<p><span class="rt-rwd-qna-type-m">답변상태 </span> <span class="rt-rwd-qna-state rt-rwd-qna-a">공지사항</span></p>
					</div>
				</div>
			</div>
		</div>
<?php }}?>

<?php if($TPL_VAR["게시물수"]> 0){?>
<?php if($TPL_리스트_1){foreach($TPL_VAR["리스트"] as $TPL_V1){?>
			<div class="rt-rwd-qna-con rt-rwd-qna-norm-con clearfix">
				<div class="rt-rwd-qna-num"><p><?php echo $TPL_V1["번호"]?></p></div>
				<div class="rt-rwd-qna-subject"><?php if($TPL_VAR["분류사용"]=='y'){?>[<?php echo $TPL_V1["분류"]?>]&nbsp;<?php }?>
<?php if($TPL_V1["내글여부"]){?>
					<a href="javascript:post_my_view(<?php echo $TPL_V1["고유키"]?>)"><?php echo $TPL_V1["줄임제목"]?></a>
<?php }else{?>
					<a href="#;"><?php echo $TPL_V1["줄임제목"]?></a>
<?php }?>
					&nbsp;
<?php if($TPL_VAR["댓글사용"]=='y'&&$TPL_V1["댓글수"]> 0){?>[<?php echo $TPL_V1["댓글수"]?>]<?php }?>
						<?php echo $TPL_V1["첨부아이콘"]?><?php echo $TPL_V1["새글아이콘"]?>

				</div>
				<div class="rt-rwd-qna-password-form">
					<form name="view_form<?php echo $TPL_V1["고유키"]?>" action="<?php echo $TPL_VAR["acturl"]?>/user/update.php" method="post" target="rt_ifrm">
					<input type="hidden" name="mode" value="view_move">
					<input type="hidden" name="seq" value="<?php echo $TPL_V1["고유키"]?>">
					<input type="hidden" name="php_self" value="<?php echo $TPL_VAR["php_self"]?>">
					<input type="hidden" name="theme" value="<?php echo $TPL_VAR["테마코드"]?>">
					<input type="hidden" name="pg" value="<?php echo $TPL_VAR["pg"]?>">
					<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
					<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>">
					<input type="hidden" name="search" value="<?php echo $TPL_VAR["검색키"]?>">
					<input type="hidden" name="searchstring" value="<?php echo $TPL_VAR["검색어"]?>">
					<span class="arrow">┗</span>
					<input type="password" name="view_pwd" placeholder="패스워드를 입력해주세요"/>
					<input type="submit" value="확인" class="rt-rwd-qna-password-send">
					</form>
				</div>
				<div class="rt-rwd-qna-type-wrap clearfix">
					<div class="rt-rwd-qna-type-con clearfix">
						<div class="rt-rwd-qna-type rt-rwd-qna-type-writer">
							<p><span class="rt-rwd-qna-type-m">작성자 : </span><?php echo $TPL_V1["작성자"]?></p>
						</div>
						<div class="rt-rwd-qna-type">
							<p><span class="rt-rwd-qna-type-m">등록일 : </span><?php echo $TPL_V1["작성일"]?></p>
						</div>
						<div class="rt-rwd-qna-type">
<?php if($TPL_V1["답변상태"]=='y'){?>
							<p><span class="rt-rwd-qna-type-m">답변상태 </span><span class="rt-rwd-qna-state rt-rwd-qna-a">답변완료</span></p>
<?php }else{?>
							<p><span class="rt-rwd-qna-type-m">답변상태 </span><span class="rt-rwd-qna-state rt-rwd-qna-q">답변대기</span></p>
<?php }?>
						</div>
					</div>
				</div>
			</div>
<?php }}?>
<?php }else{?>
			<div class="rt-rwd-list-nosearch clearfix">
				등록된 글이 없습니다.
			</div>
<?php }?>
	</div>
	<!-- 게시판 리스트 끝 -->
	<!--페이지네이션 STR-->
	<?php echo $TPL_VAR["페이지인덱스"]?>

	<!--페이지네이션 END-->

	<!-- 버튼 시작 -->
	<div class="rt-button rt-button-tar">
		<a href="<?php echo $TPL_VAR["쓰기페이지링크"]?>" style="cursor: pointer;">글쓰기</a>
	</div>
	<!-- 버튼 끝 -->
</div>
<!-- 반응형 게시판 끝 -->

<form name="my_view_form" action="<?php echo $TPL_VAR["acturl"]?>/user/update.php" method="post" target="rt_ifrm">
<input type="hidden" name="mode" value="view_move">
<input type="hidden" name="type" value="list">
<input type="hidden" name="seq" value="">
<input type="hidden" name="php_self" value="<?php echo $TPL_VAR["php_self"]?>">
<input type="hidden" name="theme" value="<?php echo $TPL_VAR["테마코드"]?>">
<input type="hidden" name="pg" value="<?php echo $TPL_VAR["pg"]?>">
<input type="hidden" name="ct" value="<?php echo $TPL_VAR["검색분류"]?>">
<input type="hidden" name="pcd" value="<?php echo $TPL_VAR["페이지코드"]?>">
<input type="hidden" name="screen" value="<?php echo $TPL_VAR["이동화면"]?>">
<input type="hidden" name="search" value="<?php echo $TPL_VAR["search"]?>">
<input type="hidden" name="searchstring" value="<?php echo $TPL_VAR["searchstring"]?>">
</form>

<link href="<?php echo $TPL_VAR["path_css"]?>/rtboard.qna.responsive.css" type="text/css" rel="stylesheet"/>

<script src="<?php echo $TPL_VAR["path_theme"]?>/user/js/rtboard.theme.qna.user.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;" ></iframe>