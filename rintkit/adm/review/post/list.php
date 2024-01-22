<?php if (defined('RINTKIT') === FALSE) { exit('잘못된 경로입니다.'); }?>

<!-- 리스트 -->
<form name="search_form" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="hidden" name="sd" value="<?php echo $env->_get['sd'];?>">
<input type="hidden" name="cf" value="<?php echo $env->_get['cf'];?>">
<div class="rt_search_wrap rt_tar">
	<select name="search">
		<option value="title" <?php echo ($env->_get['search']=="title")?"selected":"";?>>제목</option>
	</select>
	<input type="text" value="<?php echo $env->_get['searchstring'];?>" name="searchstring" />
	<span class="rt_button_wrap"><a href="#;" id="btn-search" class="rt_btn_gray btn_s">검색</a></span>
</div>
</form>


<table class="rt_list_table">
	<caption> 게시판</caption>
	<colgroup>
		<col width="7%" />
		<col width="5%" />
		<col width="12%" />
		<col width="" />
		<col width="18%" />
	</colgroup>
	<thead>
		<tr>
			<th><p>번호</p></th>
			<th><p>상태</p></th>
			<th><p>대표 이미지</p></th>
			<th><p>문구</p></th>
			<th><p>관리</p></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$_url = RTW_ADM."/".$__dr;
		$num = $cls_board->list_rec_cnt;
		$_l = $cls_board->get_list("reg_date DESC");
		if (!empty($_l)) {
			for ($i = 0; $i < count($_l); $i++) {
				$stat_str = ($_l[$i]['confirm_en'] == "Y") ? "<span style='color:blue;'>승인</span>":"승인대기";
				$stat_btn_str = ($_l[$i]['confirm_en'] == "Y") ? "승인취소":"승인처리";
				?>
			<tr>
				<td><p><?php echo $num;?></p></td>
				<td><p><?php echo $stat_str;?></p></td>
				<td>
					<a href="<?php echo $_url;?>/?sd=post&cf=form&seq=<?php echo $_l[$i]['seq'];?><?php echo $add_sch_url;?>">
					<?php
					if ($_l[$i]['file1_new']) {
						?><img src="<?php echo $_l[$i]['file_subdir'];?>/<?php echo $_l[$i]['file1_new'];?>" style="max-width:60px;" /><?
					} else {
						?><img src="/images/no_img.png" style="max-width:60px;" /><?
					}
					?>
					</a>
				</td>
				<td class="rt_tal">
					<p><a href="<?php echo $_url;?>/?sd=post&cf=form&seq=<?php echo $_l[$i]['seq'];?>"><?php echo $_l[$i]['title'];?></a></p>
				</td>
				<td>
					<p>
						<div class="rt_button_wrap">
							<a href="<?php echo $_url;?>/post/update.php?mode=confirm&seq=<?php echo $_l[$i]['seq'];?>" class="rt_btn_orange" style="padding:5px 10px;" target="rt_ifrm"><?php echo $stat_btn_str;?></a>
							<a href="<?php echo $_url;?>/?sd=post&cf=form&seq=<?php echo $_l[$i]['seq'];?>" class="rt_btn_blue" style="padding:5px 10px;">수정</a>
							<a href="#;" class="rt_btn_red" onclick="btn_delete(<?php echo $_l[$i]['seq'];?>);" style="padding:5px 10px;">삭제</a>
						</div>
					</p>
				</td>
			</tr>
		<?php
				$num--;
			}
		} else {
		?>
			<tr>
				<td colspan="5" style="height:100px;"><p>데이터가 없습니다.</p></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>

<div class="rt_button_wrap clearfix rt_tar">
	<a href="<?php echo $_url;?>/?sd=post&cf=form" class="rt_btn_blue" target="">신규 등록</a>
</div>

<?php echo $cls_board->put_page_num($_SERVER['PHP_SELF'])?>

<form name="delete_form" method="post" action="<?php echo $__sc?>/update.php" method="post" target="rt_ifrm">
	<input type="hidden" name="mode" value="select_delete">
	<input type="hidden" name="seq" value="">
</form>

<script>
function btn_delete(val) {

	var form = document.delete_form;

	if (confirm("삭제된 데이터는 복구할 수 없습니다. 삭제하시겠습니까?"))
	{
		form.seq.value=val;
		form.submit();
	}
}

;(function($) {
	$(function() {

		$("#btn-search").click(function () {
			document.search_form.submit();
		});
	});
})(jQuery);
</script>

<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>
