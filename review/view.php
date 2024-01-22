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
					<h1 class="rt-rwd-view-head-title"><?php echo $_r['title'];?></h1>
					<div class="rt-rwd-view-data-wrap">
						<span class="rt-rwd-view-data">작성자 : <?php echo $_r['name'];?></span>
						<span class="rt-rwd-view-data">작성일 : <?php echo $_r['reg_date'];?></span>
						<!-- <span class="rt-rwd-view-data">조회수 : {포스트.조회수}</span> -->
					</div>
				</div>
				<div class="rt-rwd-view-body">
					<?php echo rt_dbstr_decode($_r['cont_tx']);?>
					<?php
					if (0) {
					//for ($m = 1; $m < 5; $m++) {
						if (!empty($_r['file'.$m.'_new'])) {
							$imgsrc = $_r['file_subdir']."/".$_r['file'.$m.'_new'];
							?><img src="<?php echo $imgsrc;?>" /><br /><?php
						}
					}
					?>
				</div>
			</div>
			<!-- 뷰 끝 -->
			<!-- 버튼 시작 -->
			<div class="rt-button rt-button-tar" style="margin-top:20px;">
				<a href="javascript:location.href='/review/?pg=<?php echo $env->_get['pg'];?>';">목록</a>
			</div>
			<!-- 버튼 끝 -->

		</div>
		<!-- 반응형 게시판 끝 -->
	</section>
</div>

<!-- 반응형 CSS //-->
<link href="/app/rtboard/theme/info/user/css/rtboard.info.responsive.css" type="text/css" rel="stylesheet"/>

<script src="/app/rtboard/theme/info/user/js/rtboard.theme.info.user.js" type="text/javascript"></script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>
<?php include "../_tail.php"; ?>